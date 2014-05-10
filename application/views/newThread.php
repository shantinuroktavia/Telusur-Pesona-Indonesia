<div class="container" id="forum">
  <div class="panel panel-default">
    <div class="panel-heading">
      <a href="<?php echo site_url('/forum')?>">Forum Diskusi</a> &gt; New Thread

    </div>
    <div class="panel-body">
      <form id="newthread" method="post" action="<?php echo site_url('/forumcont/makeNewThread');?>">
        <table class="forum-create">
          <tr>
            <th class="forum-content">Judul</th>
            <td><ul></ul></td>
            <td><input name="judul" type="text" size="60%" maxlength="50" placeholder="Judul diskusi maksimum 50 karakter" required></td>
          </tr>
          <tr>
            <td><ul></ul></td>
          </tr>
          <tr>
            <th class="forum-content">Isi</th>
            <td><ul></ul></td>
            <td><textarea form="newthread" name="isi" rows="20" cols="60%" placeholder="Isi diskusi" required ></textarea></td>
          </tr>
          <tr>
            <td><ul></ul></td>
          </tr><!--
          <tr>
          <th class="forum-content">Lampiran</th>
          <td><ul></ul></td>
          <td><input type="text" size="40" placeholder="Lampiran file sebagai pendukung"></td>
          </tr>-->
          <tr>
            <td><ul></ul></td>
          </tr>
        </table>
        <table class="forum-button">
          <tr>
            <td><ul></ul></td>
          </tr>
          <tr>
            <td><ul></ul></td>
            <td><ul></ul></td>
            <td><ul></ul></td>
            <td>
              <button class="btn btn-default" type="submit">Kirim</button>
            </td>
            <td><ul></ul></td>
            <td>
              <button class="btn btn-default" type="cancel">Batal</button>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div> <!-- /container -->
