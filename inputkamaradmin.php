<html>
  <head>
    <title></title>
    <script src="javascript.js"></script>
  </head>

  <body>
    <h2>Input Data Kamar</h2>

    <form action="inputkamar-process.php" method="post">
      <table cellpadding = "3" cellspacing="0">
        <tr>
          <td>NIS</td>
          <td>:</td>
          <td><input type="text" id="nis" name="nis"></td>
        </tr>
        <tr>
          <td>Nama Lengkap</td>
          <td>:</td>
          <td><input type="text" name="nama" id="nama" size="30"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>
              <select name="kelas" id="kelas">
                <option value="">Pilih Kelas</option>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>
              <select name="jurusan" id="jurusan">
                <option value = "">Pilih Jurusan</option>
                <option value = "Teknik Informatika">Teknik Informatika</option>
                <option value = "Multimedia">Multimedia</option>
                <option value = "Akuntansi">Akuntansi</option>
                <option value = "Perbankan">Perbankan</option>
                <option value = "Pemasaran">Pemasaran</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td></td>
            <td><input type="submit" name="tambah" value="Tambah"></td>
          </tr>
        </table>
      </form>
  </body>
</html>
