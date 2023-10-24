<?php
class LexcoThemeContactFormHook
{
    private static $instance;
    private function __construct()
    {
        // Hook cuando hace el envio del formulario correcto
        add_action('wpcf7_mail_sent', array($this, 'lexco_theme_process_extras_contact_form'));

        add_action('wp_ajax_submit_form_info_landing', [$this, 'lexco_theme_submit_info_landing']);
        add_action('wp_ajax_nopriv_send_impulsa_lead', [$this, 'lexco_theme_submit_info_landing']);
    }

    public static function get_instance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function lexco_theme_process_extras_contact_form($info)
    {

        // Realizar proceso       
    }

    public function lexco_theme_submit_info_landing()
    {
        check_ajax_referer('lexco_theme_ajax');

        $formData = $this->util_recursive_sanitize_text_field($_POST);

        $body = [
            'name' => isset($formData['name']) ? $formData['name'] : '',
            'email' => isset($formData['email']) ? $formData['email'] : '',
            'phone' => isset($formData['phone']) ? $formData['phone'] : '',
            'activity' => isset($formData['activity']) ? $formData['activity'] : '',
        ];

        $response = wp_remote_post(
            'https://hooks.zapier.com/hooks/catch/13647921/bvjbq8n',
            array(
                'method' => 'POST',
                'body' => wp_json_encode($body),
                'headers' => array(
                    'Content-Type' => 'application/json'
                ),
            )
        );

        return wp_send_json(
            array(
                "response" => $response,
                'form' => 'landing'
            )
        );
    }

    public function util_recursive_sanitize_text_field($array)
    {
        foreach ($array as $key => &$value) {
            if (is_array($value)) {
                $value = recursive_sanitize_text_field($value);
                continue;
            }
            $value = sanitize_text_field($value);
        }

        return $array;
    }
}