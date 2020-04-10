<h4>500年內的閏年</h4>
<?php


$year = [];

for ($i = 2020; $i < 2520; $i++) {
    echo "西元年：" . $i ."是";

    if ($i % 4 == 0 && ($i % 100 != 0 || $i % 400 == 0)) {
        echo "今年是閏年";
        $year[] = $i;
    } else {
        echo "今年是平年";
    }

    echo "<hr>";
}

echo "閏年陣列";
echo "<pre>"; print_r($year);echo"</pre>";

$testYear = rand(2020,2520);

if(in_array($testYear,$year)){
    echo $testYear."是閏年";
}else{
    echo $testYear."是平年";
}

?>