<?php

$json = file_get_contents(__DIR__ . '/content2.json');
$data = json_decode($json, true);
//echo '<pre>';

//print_r($data['0']['0']['variantsOfAnswers']) ;
//echo '</pre>';

//echo $item['question'] . '<br>';
	/*foreach ($item['variantsOfAnswers'] as $letter => $value) {
		echo $value. '<br>';
	};*/
$x = $_GET['id'];

//foreach ($data as $item) {
	//foreach ($item as $value) {
$variantsOfAnswers = $data[$x][$x]['variantsOfAnswers'];
//var_dump($variantsOfAnswers);
	//foreach ($variantsOfAnswers  as $letter => $value) {
	

$a = $variantsOfAnswers['a'];
$b = $variantsOfAnswers['b'];
$c = $variantsOfAnswers['c'];
$d = $variantsOfAnswers['d'];
	//for ($i = 0; $i < count($variantsOfAnswers); $i++){
		//echo "$a". '<br>';
		//echo "$b". '<br>';
		//echo "$c". '<br>';
		//echo "$d". '<br>';
//echo $variantsOfAnswers[$index]. '<br>';
$question = $data[$x][$x]['question'];
$rightAnswer = $data[$x][$x]['rightAnswer'];

//echo $rightAnswer. '<br>';
// };
//};
if (isset($_GET['q1'])) {
	echo $_GET['q1']. '<br>';
	$_SESSION['variantsOfAnswers'] = $_GET['q1'];
	echo $_SESSION['variantsOfAnswers']. '<br>'; 
		 if ($_SESSION['variantsOfAnswers'] === $rightAnswer) {
		 	echo "Верно";
		 	
		 	exit; 
			} else {
			echo "НеВерно"; 
			exit;
			};


};

 
?>
 
<h4>Ответьте на вопрос</h4>
<form action="" method="GET" enctype="multipart/form-data">
   <label>Введите Ваше имя <input type="text" name="name" value=""></label>
   <br />   
   <br />

	<fieldset>
        <legend><?php echo $question; ?></legend>
	    <label><input type="radio" name="q1" value="$a"><?php echo $a; ?></label>
	    <label><input type="radio" name="q1" value="$b"><?php echo $b; ?></label>
	    <label><input type="radio" name="q1" value="$c"><?php echo $c; ?></label>
	    <label><input type="radio" name="q1" value="$d"><?php echo $d; ?></label>
    </fieldset>
    <button type="submit" name="button">Проверить</button>
</form>