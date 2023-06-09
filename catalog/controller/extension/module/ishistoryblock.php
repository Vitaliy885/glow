<?php
class ControllerExtensionModuleIshiStoryBlock extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/ishistoryblock');
		$this->load->model('design/banner');
		$this->load->model('tool/image');
		
		$language_id = $this->config->get('config_language_id');

		if(isset($setting['title'][$language_id])){
			$data['heading'] = $setting['title'][$language_id];
		}
		if(isset($setting['subtitle'][$language_id])){
			$data['subtitle'] = $setting['subtitle'][$language_id];
		}

		if(!empty($setting['position'])) {
			$data['position'] = $setting['position'];
		}
		
		if(isset($setting['marginbottom'])){
			$data['marginbottom'] = $setting['marginbottom'];
		}

		if(!empty($setting['image_position'])) {
			$data['image_position'] = $setting['image_position'];
		}

		if(!empty($setting['image'])) {
			if ($this->request->server['HTTPS']) {
				$data['bgimage'] = $this->config->get('config_ssl') . 'image/' . $setting['image'];
			} else {
				$data['bgimage'] = $this->config->get('config_url') . 'image/' . $setting['image'];
			}
		}

		if (isset($setting['module_description'][$this->config->get('config_language_id')])) {

			$data['html'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8');

			return $this->load->view('extension/module/ishistoryblock', $data);
		}

	}
}