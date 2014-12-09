function valider(f)
{
    login=false; pwd=false; alerte="";
    if(f.pwd.value)
    {
     alerte += "Indiquer votre pwd \n";   
    }
    else 
    {
     pwd = true;
    }
    if (f.login.value)
    {
     alerte += "Indiquer votre login \n";   
    }
    else 
    {
    login = true;
    }
    if (pwd==true && login==true)
    {
     return true;
    }
    else
    {
      alert(alerte);
      return false;
    }
}
