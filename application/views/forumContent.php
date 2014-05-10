<div class="container" id="forum">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title" align="center">Judul Diskusi</h3>
    </div>
    <div class="panel-body">
<?php
foreach($postlist as $post){
echo '<table class="forum-table" style="width:70%;">
<tr><th class="forum-who">Ditulis oleh <a href="'.site_url('/profil/'.$post['IdPenulis']).'">';
echo get_username($post['IdPenulis']);
echo '</a> pada ';
echo $post['WaktuPost'];
echo '</th>
</tr>
<tr>
<td class="forum-isi">';
$isi = preg_replace('@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a href="$1" target="_blank">$1</a>', $post['Isi']);
$isi = nl2br($isi);
echo $isi;
echo '</td>
</tr>
</table>
<br/>';
}
    $user_cookie = $this->session->userdata('idAnggotaTLPI');
if($user_cookie!=false){
echo
      '<form id="newpost" method="post" action="';
      echo site_url('/forumcontroller/makeNewPost/'.$idThread);
      echo '">
        <table class="forum-create">
          <tr>
            <td><textarea form="newpost" name="isi" rows="5" cols="70%" placeholder="Balas thread ini" required ></textarea></td>
          </tr>
          <tr>
            <td>
              <button class="btn btn-default" type="submit">Balas</button>
            </td>
          </tr>
        </table>
      </form>'
      ;}
      else echo "Hanya pengguna terdaftar yang dapat membalas forum.";
      ?>
    </div>
  </div>
</div>  <!-- /container -->
