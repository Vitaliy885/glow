<?php
class ControllerExtensionModuleBlogger extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/blogger');
		$this->load->model('ishithemes/blogger');
		$this->load->model('tool/image');
		$this->load->model('design/banner');
		
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_read_more'] = $this->language->get('text_read_more');
		$data['text_date_added'] = $this->language->get('text_date_added');
		$data['entry_comment'] = $this->language->get('entry_comment');

		$data['button_all_blogs'] = $this->language->get('button_all_blogs');

		$data['all_blogs'] = $this->url->link('information/blogger/blogs');

		$data['blogs'] = array();
		$data['desc'] = ((isset($setting['desc']) && $setting['desc'] == 1)) ? 1 : 0;

		$language_id = $this->config->get('config_language_id');
		
		if (!$setting['limit']) {
			$setting['limit'] = 4;
		}	
		
		if(isset($setting['title'][$language_id])){
			$data['heading'] = $setting['title'][$language_id];
		}
				
		if(isset($setting['subtitle'][$language_id])){
			$data['subtitle'] = $setting['subtitle'][$language_id];
		}
		
		$data['bgcolor'] = $setting['bgcolor'];

		if(isset($setting['videolink'])){
			$data['videolink'] = $setting['videolink'];
		}

		if(!empty($setting['bg_image'])) {
			if ($this->request->server['HTTPS']) {
				$data['bg_image'] = $this->config->get('config_ssl') . 'image/' . $setting['bg_image'];
			} else {
				$data['bg_image'] = $this->config->get('config_url') . 'image/' . $setting['bg_image'];
			}
		}

		if(!empty($setting['image'])) {
			if ($this->request->server['HTTPS']) {
				$data['bgimage'] = $this->config->get('config_ssl') . 'image/' . $setting['image'];
			} else {
				$data['bgimage'] = $this->config->get('config_url') . 'image/' . $setting['image'];
			}
		}
				
		foreach ($this->model_ishithemes_blogger->getBlogsByModule($setting['module_id'], $setting['limit']) as $result) {			
			
			$total_comments = $this->model_ishithemes_blogger->getTotalBlogComments($result['blogger_id']);
			
			$data['blogs'][] = array(
				'blogger_id'  => $result['blogger_id'],
				'image' 	  => $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']),
				'title'       => html_entity_decode($result['title'], ENT_QUOTES, 'UTF-8'),
				'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $setting['char_limit']) . '...',
				'date_added'  => date('d M Y', strtotime($result['date_added'])),			
				'total_comments' => number_format($total_comments),
				'href'        => $this->url->link('information/blogger', 'blogger_id=' . $result['blogger_id'])
			);  	
		}

		return $this->load->view('extension/module/blogger', $data);
	}
}