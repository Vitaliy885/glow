<?php
class ControllerExtensionModuleIshiBannerBlock extends Controller {
	public function index($setting) {
		
		static $module = 0;
		$this->load->model('tool/image');
		
		$data['banners'] = array();
		$banners = $setting['ishibanner'];
		$data['column'] = $setting['column'];
		$data['style'] = $setting['style'];
		$column = $setting['column'];
		$data['ishi_randomnumer'] = "ishibannerblock-" . rand();
		$data['scale'] = (isset($setting['scale']) && $setting['scale'] == 1) ? 'scale' : '';
		
		if($column == 1){
			$data['column_class'] = 'col-md-12 col-sm-12 col-xs-12';
		}elseif($column == 2){
			$data['column_class'] = 'col-md-6 col-sm-6 col-xs-12';
		}elseif($column == 4){
			$data['column_class'] = 'col-md-4 col-sm-4 col-xs-4';
		}else{
			$data['column_class'] = 'col-md-4 col-sm-4 col-xs-4';
		}
		

		$lang = $this->config->get('config_language_id');
		
		if(!empty($banners)){
			
			$bannercount = count($banners);
			if($bannercount == 2){
				$data['bannerclass'] = 'two_bannerblock';
			}else if($bannercount == 3) {
				$data['bannerclass'] = 'three_bannerblock';
			}else if($bannercount == 4) {
				$data['bannerclass'] = 'four_bannerblock';
			}
			else{
				$data['bannerclass'] = 'one_bannerblock';
			}

			foreach ($banners as $banner) {
				if (is_file(DIR_IMAGE . $banner['image'])) {
					$showtext = (isset($banner['showtext']) && $banner['showtext'] == 1) ? '1' : '0';
					$data['banners'][] = array(
						'title' => $banner['title'][$lang],
						'subtitle' => $banner['subtitle'][$lang],
						'showtext' => $showtext,
						'button_name' => $banner['button_name'][$lang],
						'link'  => $banner['link'],
						'image' => $this->model_tool_image->resize($banner['image'], $setting['width'], $setting['height'])
					);
				}
			}
		}

		$data['module'] = $module++;

		return $this->load->view('extension/module/ishibannerblock', $data);
	}
}