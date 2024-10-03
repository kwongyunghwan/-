<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Employees</title>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
        font-family:NanumMyeongjo;
      }
      table.table01 {
        border-collapse: collapse;
        width:90%;
    text-align: center;
    line-height: 1.5;
    margin-top:40px;
    margin-left:40px;
    margin-right:40px;
      }
      table.table01 thead th {
    font-style:bold;
    padding: 10px;
    vertical-align: top;
    color: black;
    font-size:20px;
    border-top: 3px solid rgba(159, 129, 247,1);
    border-bottom: 3px solid rgba(159, 129, 247,0.8);
         }
        table.table01 td {
        width: 400px;
        font-style:bold;
        font-family:NanumMyeongjo;
    padding: 10px;
    vertical-align: top;
    border-bottom: 1px solid rgba(159, 129, 247,0.4);
      }
      @font-face {
      font-family: "Cafe24Ohsquare";
      src:url(text/Cafe24Ohsquare.ttf) format('truetype');
      }
      @font-face {
      font-family: "TmonMonsori";
      src:url(text/TmonMonsori.ttf) format('truetype');
      }
      @font-face {
      font-family: "NanumMyeongjo";
      src:url(text/NanumMyeongjo.ttf) format('truetype');
      }
    </style>
  </head>
  <body>
    <table class="table01">
      <thead>
        <tr>
          <th>초음파 센서</th>
          <th>조도센서</th>
        </tr>
      </thead>
      <tbody>

<?php
$conn = mysqli_connect("211.218.150.109", "ci2020ohhat", "2020ohhat", "ci2020ohhat");
$select_query = "SELECT UltraSonic, illumination FROM Sensor";
$result_set = mysqli_query($conn, $select_query);
while ($row = mysqli_fetch_array($result_set)){
    echo '<tr>
    <td>' . $row[ 'UltraSonic' ] . '</td>
    <td>'. $row[ 'illumination' ] . '</td>
    </tr>';
}



mysqli_close($conn);

?>


<p>
<?php
$conn = mysqli_connect("211.218.150.109", "ci2020ohhat", "2020ohhat", "ci2020ohhat");
$query = "SELECT avg(UltraSonic), avg(illumination) FROM Sensor";
$result_set = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result_set)){

    echo '<td>평균 : '.$row['avg(UltraSonic)'];
    echo '</td>';
    echo '<td>평균 : '.$row['avg(illumination)'];
    echo '</td>';

}
mysqli_close($conn);
?>
</tbody>
</table>
</body>
</html>
