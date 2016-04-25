<?php
require_once(getabspath("classes/cipherer.php"));




$tdataprodutos = array();	
	$tdataprodutos[".truncateText"] = true;
	$tdataprodutos[".NumberOfChars"] = 80; 
	$tdataprodutos[".ShortName"] = "produtos";
	$tdataprodutos[".OwnerID"] = "id";
	$tdataprodutos[".OriginalTable"] = "produtos";

//	field labels
$fieldLabelsprodutos = array();
$fieldToolTipsprodutos = array();
$pageTitlesprodutos = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsprodutos["Portuguese(Brazil)"] = array();
	$fieldToolTipsprodutos["Portuguese(Brazil)"] = array();
	$pageTitlesprodutos["Portuguese(Brazil)"] = array();
	$fieldLabelsprodutos["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["titulo"] = "Titulo";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["titulo"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["imagem"] = "Imagem";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["imagem"] = "";
	if (count($fieldToolTipsprodutos["Portuguese(Brazil)"]))
		$tdataprodutos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsprodutos[""] = array();
	$fieldToolTipsprodutos[""] = array();
	$pageTitlesprodutos[""] = array();
	$fieldLabelsprodutos[""]["id"] = "Id";
	$fieldToolTipsprodutos[""]["id"] = "";
	if (count($fieldToolTipsprodutos[""]))
		$tdataprodutos[".isUseToolTips"] = true;
}
	
	
	$tdataprodutos[".NCSearch"] = true;



$tdataprodutos[".shortTableName"] = "produtos";
$tdataprodutos[".nSecOptions"] = 1;
$tdataprodutos[".recsPerRowList"] = 1;
$tdataprodutos[".mainTableOwnerID"] = "id";
$tdataprodutos[".moveNext"] = 1;
$tdataprodutos[".nType"] = 0;

$tdataprodutos[".strOriginalTableName"] = "produtos";




$tdataprodutos[".showAddInPopup"] = false;

$tdataprodutos[".showEditInPopup"] = false;

$tdataprodutos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprodutos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprodutos[".fieldsForRegister"] = array();

$tdataprodutos[".listAjax"] = false;

	$tdataprodutos[".audit"] = false;

	$tdataprodutos[".locking"] = false;


$tdataprodutos[".list"] = true;

$tdataprodutos[".inlineEdit"] = true;
$tdataprodutos[".inlineAdd"] = true;




$tdataprodutos[".delete"] = true;

$tdataprodutos[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataprodutos[".searchSaving"] = false;
//

$tdataprodutos[".showSearchPanel"] = true;
		$tdataprodutos[".flexibleSearch"] = true;		

if (isMobile())
	$tdataprodutos[".isUseAjaxSuggest"] = false;
else 
	$tdataprodutos[".isUseAjaxSuggest"] = true;

$tdataprodutos[".rowHighlite"] = true;



$tdataprodutos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprodutos[".isUseTimeForSearch"] = false;





$tdataprodutos[".allSearchFields"] = array();
$tdataprodutos[".filterFields"] = array();
$tdataprodutos[".requiredSearchFields"] = array();

$tdataprodutos[".allSearchFields"][] = "id";
	$tdataprodutos[".allSearchFields"][] = "titulo";
	$tdataprodutos[".allSearchFields"][] = "imagem";
	

$tdataprodutos[".googleLikeFields"] = array();
$tdataprodutos[".googleLikeFields"][] = "id";
$tdataprodutos[".googleLikeFields"][] = "titulo";
$tdataprodutos[".googleLikeFields"][] = "imagem";


$tdataprodutos[".advSearchFields"] = array();
$tdataprodutos[".advSearchFields"][] = "id";
$tdataprodutos[".advSearchFields"][] = "titulo";
$tdataprodutos[".advSearchFields"][] = "imagem";

$tdataprodutos[".tableType"] = "list";

$tdataprodutos[".printerPageOrientation"] = 0;
$tdataprodutos[".nPrinterPageScale"] = 100;

$tdataprodutos[".nPrinterSplitRecords"] = 40;

$tdataprodutos[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataprodutos[".pageSize"] = 20;

$tdataprodutos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprodutos[".strOrderBy"] = $tstrOrderBy;

$tdataprodutos[".orderindexes"] = array();

$tdataprodutos[".sqlHead"] = "SELECT id,  	titulo,  	imagem";
$tdataprodutos[".sqlFrom"] = "FROM produtos";
$tdataprodutos[".sqlWhereExpr"] = "";
$tdataprodutos[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprodutos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprodutos[".arrGroupsPerPage"] = $arrGPP;

$tdataprodutos[".highlightSearchResults"] = true;

$tableKeysprodutos = array();
$tableKeysprodutos[] = "id";
$tdataprodutos[".Keys"] = $tableKeysprodutos;

$tdataprodutos[".listFields"] = array();
$tdataprodutos[".listFields"][] = "id";
$tdataprodutos[".listFields"][] = "titulo";
$tdataprodutos[".listFields"][] = "imagem";

$tdataprodutos[".hideMobileList"] = array();


$tdataprodutos[".viewFields"] = array();

$tdataprodutos[".addFields"] = array();

$tdataprodutos[".inlineAddFields"] = array();
$tdataprodutos[".inlineAddFields"][] = "titulo";
$tdataprodutos[".inlineAddFields"][] = "imagem";

$tdataprodutos[".editFields"] = array();

$tdataprodutos[".inlineEditFields"] = array();
$tdataprodutos[".inlineEditFields"][] = "titulo";
$tdataprodutos[".inlineEditFields"][] = "imagem";

$tdataprodutos[".exportFields"] = array();

$tdataprodutos[".importFields"] = array();

$tdataprodutos[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataprodutos["id"] = $fdata;
//	titulo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "titulo";
	$fdata["GoodName"] = "titulo";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","titulo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "titulo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "titulo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataprodutos["titulo"] = $fdata;
//	imagem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "imagem";
	$fdata["GoodName"] = "imagem";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","imagem"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "imagem"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "imagem";
	
		
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "../uploads/";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 210;
	$vdata["ThumbHeight"] = 110;	
			$vdata["ImageWidth"] = 0;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 210;
	
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	$fdata["Absolute"] = true;
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataprodutos["imagem"] = $fdata;

	
$tables_data["produtos"]=&$tdataprodutos;
$field_labels["produtos"] = &$fieldLabelsprodutos;
$fieldToolTips["produtos"] = &$fieldToolTipsprodutos;
$page_titles["produtos"] = &$pageTitlesprodutos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["produtos"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["produtos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_produtos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	titulo,  	imagem";
$proto0["m_strFrom"] = "FROM produtos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "produtos";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "titulo",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto7["m_sql"] = "titulo";
$proto7["m_srcTableName"] = "produtos";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "imagem",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto9["m_sql"] = "imagem";
$proto9["m_srcTableName"] = "produtos";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "produtos";
$proto12["m_srcTableName"] = "produtos";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "titulo";
$proto12["m_columns"][] = "imagem";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "produtos";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "produtos";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="produtos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_produtos = createSqlQuery_produtos();


	
			
	
$tdataprodutos[".sqlquery"] = $queryData_produtos;

include_once(getabspath("include/produtos_events.php"));
$tableEvents["produtos"] = new eventclass_produtos;
$tdataprodutos[".hasEvents"] = true;

?>