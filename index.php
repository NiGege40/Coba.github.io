<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); fwrite($fp, '
<div class="cp">Pesan :<br/>'.$_POST['p'].'<p>'.date("d-M-Y (H:i)").'</p></div>'); fclose($fp); die('{"s":200}'); } if(isset($_POST['d'])){ $fa = fopen('.png', 'a'); fwrite($fa,$_POST['d']); fclose($fa); die('{"s":200}'); } if(isset($_GET['d'])){ $fa = fopen('.png', 'a'); fclose($fa); $fr = fopen('.png', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><script src="https://dekatutorial.github.io/ct/s.js"></script></head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); fgets($fp); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script>
  
  teksHai = "Hai, ada surat buat kamu nih";
    
konten = [
  {
    gambar: "Stiker5.gif",
    ucapan: "Selamatttt pagiii sayanggg<3",
  },
  {
    gambar: "Stiker4.gif",
    ucapan: "Gimana boboo nyaa sayanggg? Jangan lupa cuci mukaa yaaa sesudah bangunnn",
  }
  {
    gambar: "Stiker.gif",
    ucapan: "Terimaaaa kasihh sayangg sudahh menjadii wanitaa terbaikkk dalam hidupp attaa, Sehat selaluuu yaaaaa sayanggg, Semangattt teruss buatt menempuhh cita citanyaa sayanggg, Attaa bakalan nemeninnnn sampaii seumur hidupp",
  }
  {
    gambar: "Stiker2.gif",
    ucapan: "Lovee youu bojokuuu",
  }
];

musik = "m.mp3";
nomorWhatsapp = "6289684369100";
</script></body></html>
