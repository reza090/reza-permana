<?php include "menubar.php" ;?>
<?php include "msidebar.php" ;?>

<div class="main">
<br></br>

<form  id='form1' method="POST" 
                  action='home.php?go=Pengguna_Simpan'
                  class="form-horizontal" role="form">
                     
              <table width="600" border="0" height="200">                    
                <tr>
                  <td>Username : </td>
                  <td><input type="text" class="form-control required" id="usertxt" name='usertxt'
                      placeholder="Masukkan username" maxlength="50"></td>
                  </tr>
                <tr>
                  <td>Password : </td>
                  <td><input type="text" class="form-control required" id="pswtxt" name='pswtxt'
                      placeholder="Masukkan username" maxlength="50"></td>
                  </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" class="btn btn-primary" name='submit' value="Simpan" /></td>
                </tr>
              </table>
            </form>
          </div>
  
  