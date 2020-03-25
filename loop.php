<?php

/*
迴圈loop 
1.For loop 次數
  for(初始值 ; 判斷式 ; 遞增值)
2.while loop 條件
3.Foreach() 針對陣列()
遍歷:將陣列的內容完整的經過一遍
*/

//1.For loop

/*
for ($i=0 ; $i<10 ; $i++){

    for ($j=0;$j<10;$j++){
    echo "hello" .$i . "-" .$j . "br";
    }

}
*/




//99乘法表 alt+上下鍵 = 移動整行的位置

// for ($i=1;$i<10;$i++){

//     for ($j=1;$j<10;$j++){
//         echo $i . " x " . $j ." = " . $i*$j. " , ";
//     }
//         echo "<br>";

// }

echo "<hr>";
echo "<table border='1px'>";

for ($i=1;$i<10;$i++){
    echo "<tr>";
    for ($j=1;$j<10;$j++){
        echo "<td>" . $i . "  x  " . $j . "  =  " .$i*$j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<hr>";
// 99乘法表 練習


echo "<table border='1px'>";
for ($i=1;$i<10;$i++){
    echo "tr".$i;
    if ($i==1){
        echo "<td>"."&nbsp;"."</td>;
    }else{
            for ($j=1;$j<10;$j++){
                echo  "<td>".$i*$j."</td>";
                }
        echo "</td>";
         }
}
echo "</table>";


?>

<table border=1>
    <tr>
    <td>&nbsp;</td>
    <td>1</td>
    <td>2</td>
    <td>3</td> 
    <td>4</td>
    <td>5</td>
    <td>6</td> 
    <td>7</td>
    <td>8</td>
    <td>9</td> 
    </tr>
    <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td> 
    <td>4</td>
    <td>5</td>
    <td>6</td> 
    <td>7</td>
    <td>8</td>
    <td>9</td> 
    </tr>
    <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td> 
    <td>4</td>
    <td>5</td>
    <td>6</td> 
    <td>7</td>
    <td>8</td>
    <td>9</td> 
    </tr>
    <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td> 
    <td>4</td>
    <td>5</td>
    <td>6</td> 
    <td>7</td>
    <td>8</td>
    <td>9</td> 
    </tr>
    <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td> 
    <td>4</td>
    <td>5</td>
    <td>6</td> 
    <td>7</td>
    <td>8</td>
    <td>9</td> 
    </tr>
    <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td> 
    <td>4</td>
    <td>5</td>
    <td>6</td> 
    <td>7</td>
    <td>8</td>
    <td>9</td> 
    </tr>
    <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td> 
    <td>4</td>
    <td>5</td>
    <td>6</td> 
    <td>7</td>
    <td>8</td>
    <td>9</td> 
    </tr>
    <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td> 
    <td>4</td>
    <td>5</td>
    <td>6</td> 
    <td>7</td>
    <td>8</td>
    <td>9</td> 
    </tr>
    <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td> 
    <td>4</td>
    <td>5</td>
    <td>6</td> 
    <td>7</td>
    <td>8</td>
    <td>9</td> 
    </tr>
    <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td> 
    <td>4</td>
    <td>5</td>
    <td>6</td> 
    <td>7</td>
    <td>8</td>
    <td>9</td> 
    </tr>
</table>