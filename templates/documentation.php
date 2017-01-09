<div class="container">
    <div id="introduction" class="section scrollspy">
      <div class="flow-text" style="text-align: justify;">
  
        <h2>Documentation Services</h2>
        <img class="circle left" src="http://ratnalinux/tutorial/libs/img/apis.svg" style="width: 30%;margin: 10px;">
        <p>Pada Era digital atau era informasi saat ini, membawa kehidupan manusia lebih maju dengan digitalisasi, komputerisasi, smart phone-isasi dan adaptasi berbagai perangkat yang memanfaatkan data-data digital lainnya. Sering disebut juga dengan revolusi digital. Era digital yang dimulai sejak tahun 1970-an ini semakin terpompa perkembangannya seiring dengan lahir dan berkembangnya teknologi internet. Internet telah mengubah budaya interaksi manusia menjadi lebih ter-digital-isasi.</p>
        <p><span>Teknologi informasi termasuk Internet dibangun dan disusun atas program-program kecil yang megandung sekumpulan instruksi, dibuat sedemikan rupa sehingga akhirnya dapat digunakan oleh manusia. Bagaimana program-program ini dapat berkomunikasi satu dengan yang lainnya?. <em><b>API</b></em> <i>(Application Programming Interface)</i> adalah aturan atau protokol yang berupa antaramuka “interface” yang memungkinkan interakasi antar program. API tersebut lah yang mencoba menjembatani program-program untuk bisa berkomunikasi membangun fitur yang lebih kompleks.</span></p>
        <p>Saat ini implementasi web service cukup menjadi hal yang vital dalam globalisasi bisnis. Dengan munculnya berbagai macam perangkat seperti desktop, laptop, tablet, smart phone, e-book , dan lain-lain membuat peran Web API semakin vital. Sangat tidak efisien jika kita harus membuat aplikasi mulai dari nol untuk setiap perangkat tersebut.  Keberadaan Web API juga memberikan peluang kita untuk menentukan solusi/aplikasi tersendiri tanpa harus terikat ketat dengan layer bawah seperti perangkat keras. Hal inilah yang menjadi salah satu alasan mengapa API memegang peranan vital dalam globalisasi bisnis teknologi informasi. </p>

      </div>
    </div>

    <div id="structure" class="section scrollspy">
      <h2>Get Users Data</h2>

      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header active"><i class="material-icons">filter_drama</i> Get All Users <span class="new badge" data-badge-caption="/ all / users">GET</span></div>
          <div class="collapsible-body">
           <pre class="prettyprint">&lt;?php

$json = file_get_contents('http://ratnalinux/tutorial/all/users');
$obj = json_decode($json);

for ($i=0; $i &lt; count($obj); $i++) { 
  
  echo "&lt;div style='border:1px solid black;margin:10px auto;padding:10px;'&gt;";
  echo "&lt;b&gt;". $obj[$i]-&gt;{'first_name'} ." " . $obj[$i]-&gt;{'last_name'} ."&lt;/b&gt;&lt;br&gt;";
  echo "Alamat : ". $obj[$i]-&gt;{'st_address'} ."&lt;br&gt;";
  echo "&lt;/div&gt;";

}

?&gt;
          </pre>
          </div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">filter_drama</i> Get Single Users <span class="new badge" data-badge-caption="/ data / user / { id }">GET</span></div>
          <div class="collapsible-body">
          <pre class="prettyprint">&lt;?php

$json = file_get_contents('http://ratnalinux/tutorial/data/user/{id}');
$obj = json_decode($json);

for ($i=0; $i &lt; count($obj); $i++) { 
  
  echo "&lt;div style='border:1px solid black;margin:10px auto;padding:10px;'&gt;";
  echo "&lt;b&gt;". $obj[$i]-&gt;{'first_name'} ." " . $obj[$i]-&gt;{'last_name'} ."&lt;/b&gt;&lt;br&gt;";
  echo "Alamat : ". $obj[$i]-&gt;{'st_address'} ."&lt;br&gt;";
  echo "&lt;/div&gt;";

}

?&gt;
          </pre>
          </div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">filter_drama</i> Get Users with Limit Rows <span class="new badge" data-badge-caption="/ get / users / { id }">GET</span></div>
          <div class="collapsible-body">
          <pre class="prettyprint">&lt;?php

$json = file_get_contents('http://ratnalinux/tutorial/get/users/{limit}');
$obj = json_decode($json);

for ($i=0; $i &lt; count($obj); $i++) { 
  
  echo "&lt;div style='border:1px solid black;margin:10px auto;padding:10px;'&gt;";
  echo "&lt;b&gt;". $obj[$i]-&gt;{'first_name'} ." " . $obj[$i]-&gt;{'last_name'} ."&lt;/b&gt;&lt;br&gt;";
  echo "Alamat : ". $obj[$i]-&gt;{'st_address'} ."&lt;br&gt;";
  echo "&lt;/div&gt;";

}

?&gt;
          </pre>
          </div>
          </li>
          </ul>
          </div>

    <div id="initialization" class="section scrollspy">
      <p>Content </p>
    </div>

    
</div>