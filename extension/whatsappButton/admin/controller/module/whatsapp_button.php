<?php
namespace Opencart\Admin\Controller\Extension\whatsappButton\Module;
class WhatsappButton extends \Opencart\System\Engine\Controller {

	public function index(): void {

		$this->load->language('extension/whatsappButton/module/whatsapp_button');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/whatsappButton/module/whatsapp_button', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['save']  = $this->url->link('extension/whatsappButton/module/whatsapp_button|save', 'user_token=' . $this->session->data['user_token'], true);
		$data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$data['module_whatsapp_button_status'] = $this->config->get('module_whatsapp_button_status');
		$data['module_whatsapp_number'] = $this->config->get('module_whatsapp_number');
		$data['module_whatsapp_message'] = $this->config->get('module_whatsapp_message');
		$data['module_whatsapp_button_color'] = $this->config->get('module_whatsapp_button_color');
		$data['module_whatsapp_button_text'] = $this->config->get('module_whatsapp_button_text');

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/whatsappButton/module/whatsapp_button', $data));
	}

	public function save(): void {
		$this->load->language('extension/whatsappButton/module/whatsapp_button');

		$json = [];

		if (!$this->user->hasPermission('modify', 'extension/whatsappButton/module/whatsapp_button')) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}

		if (!$json) {
			$this->load->model('setting/setting');

			$this->model_setting_setting->editSetting('module_whatsapp_button', $this->request->post);
			$this->model_setting_setting->editSetting('module_whatsapp_number', $this->request->post);
			$this->model_setting_setting->editSetting('module_whatsapp_message', $this->request->post);
			$this->model_setting_setting->editSetting('module_whatsapp_button_color', $this->request->post);
			$this->model_setting_setting->editSetting('module_whatsapp_button_text', $this->request->post);

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}