<?
plugins_register_backend($plugin,array("icon"=>"icon-folder-stroke","sub"=>array(
  "articles"=>"Artikel",
  "prices"=>"Preise",
  "barcodes"=>"Barcode-Zuordnungen",
)));

require("class.Article.php");
require("class.Price.php");
require("class.Barcode.php");

function Wawi_findByBarcode() {
  if(!isset($_GET["barcode"]))
    throw new Exception("code missing");
  $code=$_GET["barcode"];
  $barcodes=Wawi_Barcode::getByFilter("where code=?",$code);
  $articles=array();
  foreach($barcodes as $e) {
    $a=Wawi_Article::getById($e->wawi_articles_id);
    $articles[]=$a;
  }
  DBObj_Interface_JSON::listView("Wawi_Article",$articles);
}
plugins_register_backend_handler($plugin,"transactions","findbybarcode","Wawi_findByBarcode");

function Wawi_patchArticle() {
}
plugins_register_backend_handler($plugin,"transactions","patchArticle","Wawi_findByBarcode");
