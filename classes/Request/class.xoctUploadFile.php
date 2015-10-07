<?php

/**
 * Class xoctUploadFile
 *
 * @author  Fabian Schmid <fs@studer-raimann.ch>
 * @version 1.0.0
 */
class xoctUploadFile {

	/**
	 * @param $name
	 *
	 * @return xoctUploadFile
	 */
	public static function getInstanceFromFileArray($name) {
		$file = $_FILES[$name];
		//		echo '<pre>' . print_r($_FILES, 1) . '</pre>';
		$inst = new self();
		$inst->setTitle($file['name']);
		$inst->setFilePath($file['tmp_name']);
		$inst->setFileSize($file['size']);
		$inst->setPostVar($name);

		return $inst;
	}


	/**
	 * @param       $post_var
	 * @param array $input
	 *
	 * @return xoctUploadFile
	 */
	public static function getInstanceFromArray($post_var, array $input) {
		$file = $input;

		$inst = new self();
		$inst->setTitle($file['name']);
		$inst->setFilePath($file['tmp_name']);
		$inst->setFileSize($file['size']);
		$inst->setPostVar($post_var);

		return $inst;
	}


	/**
	 * @return string
	 */
	public function getCurlString() {
		return '@' . $this->getFilePath() . ';filename=' . $this->getTitle();
	}


	/**
	 * @var string
	 */
	protected $file_path = '';
	/**
	 * @var string
	 */
	protected $title = '';
	/**
	 * @var int
	 */
	protected $file_size = 0;
	/**
	 * @var string
	 */
	protected $post_var = '';
	/**
	 * @var string
	 */
	protected $mime_type = '';


	/**
	 * @return string
	 */
	public function getFilePath() {
		return $this->file_path;
	}


	/**
	 * @param string $file_path
	 */
	public function setFilePath($file_path) {
		$this->file_path = $file_path;
	}


	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}


	/**
	 * @param string $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}


	/**
	 * @return int
	 */
	public function getFileSize() {
		return $this->file_size;
	}


	/**
	 * @param int $file_size
	 */
	public function setFileSize($file_size) {
		$this->file_size = $file_size;
	}


	/**
	 * @return string
	 */
	public function getPostVar() {
		return $this->post_var;
	}


	/**
	 * @param string $post_var
	 */
	public function setPostVar($post_var) {
		$this->post_var = $post_var;
	}


	/**
	 * @return string
	 */
	public function getMimeType() {
		return $this->mime_type;
	}


	/**
	 * @param string $mime_type
	 */
	public function setMimeType($mime_type) {
		$this->mime_type = $mime_type;
	}
}

?>