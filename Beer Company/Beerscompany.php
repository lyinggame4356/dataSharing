<?php
require_once("inc/config.inc.php");
require_once("inc/Entities/Shoe.class.php");
require_once("inc/Utilities/Page.class.php");
// require_once("inc/Utilities/Validation.class.php");
// require_once("inc/Utilities/FileAgent.class.php");
// require_once("inc/Utilities/CSVAgent.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/ShoeDAO.class.php");

BeerDAO::initialize();

Page::header();
Page::content();

Page::footer();
