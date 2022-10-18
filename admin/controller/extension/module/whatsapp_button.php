<?php
class ControllerExtensionModuleWhatsappButton extends Controller {
	private $error = array();

	public function index() {
		
		$this->load->language('extension/module/whatsapp_button');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_whatsapp_button', $this->request->post);
			$this->model_setting_setting->editSetting('module_whatsapp_number', $this->request->post);
			$this->model_setting_setting->editSetting('module_whatsapp_message', $this->request->post);
			$this->model_setting_setting->editSetting('module_whatsapp_button_color', $this->request->post);
			$this->model_setting_setting->editSetting('module_whatsapp_button_text', $this->request->post);
			

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/whatsapp_button', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/whatsapp_button', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$this->load->model('tool/image');

		if (isset($this->request->post['module_whatsapp_button_status'])) {
			$data['module_whatsapp_button_status'] = $this->request->post['module_whatsapp_button_status'];
		} else {
			$data['module_whatsapp_button_status'] = $this->config->get('module_whatsapp_button_status');
		}

		if (isset($this->request->post['module_whatsapp_number'])) {
			$data['module_whatsapp_number'] = $this->request->post['module_whatsapp_number'];
		} else {
			$data['module_whatsapp_number'] = $this->config->get('module_whatsapp_number');
		}

		if (isset($this->request->post['module_whatsapp_message'])) {
			$data['module_whatsapp_message'] = $this->request->post['module_whatsapp_message'];
		} else {
			$data['module_whatsapp_message'] = $this->config->get('module_whatsapp_message');
		}

		if (isset($this->request->post['module_whatsapp_button_color'])) {
			$data['module_whatsapp_button_color'] = $this->request->post['module_whatsapp_button_color'];
		} else {
			$data['module_whatsapp_button_color'] = $this->config->get('module_whatsapp_button_color');
		}

		if (isset($this->request->post['module_whatsapp_button_text'])) {
			$data['module_whatsapp_button_text'] = $this->request->post['module_whatsapp_button_text'];
		} else {
			$data['module_whatsapp_button_text'] = $this->config->get('module_whatsapp_button_text');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/whatsapp_button', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/whatsapp_button')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}