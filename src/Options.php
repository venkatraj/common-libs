<?php
if (!defined('ABSPATH')) die('No direct access allowed');

class Options {

	private string $key;

	private array $defaults;

	public function __construct(string $key) {
		$this->key = $key;
		$this->defaults = [];
	}

	public function get() {

	}

	public function getAllOptions() {

	}

	public function getDefaultOptions() {

	}

	public function setDefaultOptions() {

	}

	public function update() {

	}

	public function delete() {

	}

	public function reset() {

	}
}