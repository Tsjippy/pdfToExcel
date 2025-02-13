<?php
namespace SIM\PDFTOEXCEL;
use SIM;

const MODULE_VERSION		= '8.0.3';
DEFINE(__NAMESPACE__.'\MODULE_SLUG', strtolower(basename(dirname(__DIR__))));

DEFINE(__NAMESPACE__.'\MODULE_PATH', plugin_dir_path(__DIR__));