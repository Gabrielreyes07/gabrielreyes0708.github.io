<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>DATOS EN UN FORMULARIO</title> 
<body bgcolor="#000000">
            <p align="center"><b><font color="#FFFFFF">
            </body>
            <script language="JavaScript">
            //Insert these lines at once after tag <body> (not in the other place).
            //----   Choice of variables   ----\\
            
            numb_s=20 		// - stars number (we have 20 ones).
            speed_s=3 		// - speed of movement of stars
            
            //This and others free scripts you can find on a site:  artdhtml.com
            //The script works both with Internet Explorer (4-6) and with Netscape (4,6).
            
            ns=document.layers?1:0
            ie=document.all?1:0
            ns6=document.getElementById&&!document.all?1:0
            function moveSlide(name,sLeft, sTop) {
             if (ns) {document.layers[name].top=sTop;document.layers[name].left=sLeft}
             if (ie) {document.all[name].style.top=sTop;document.all[name].style.left=sLeft}
             if (ns6) {document.getElementById(name).style.top=sTop;document.getElementById(name).style.left=sLeft}
            }
            function sizeSlide(name,sWdh, sHgt) {
             if (ns){document.layers[name].clip.width=sWdh; document.layers[name].clip.height=sHgt}
             if (ie){document.all[name].style.width=sWdh; document.all[name].style.height=sHgt}
             if (ns6){document.getElementById(name).style.width=sWdh; document.getElementById(name).style.height=sHgt}
            }
            function positions(){
             hei_scr=(ie)?window.document.body.clientHeight:window.innerHeight
             wid_scr=(ie)?window.document.body.clientWidth:window.innerWidth
             y_scrl=(ie)?document.body.scrollTop:window.pageYOffset
             x_scrl=(ie)?document.body.scrollLeft:window.pageXOffset
            }
            posX=new Array()
            posY=new Array()
            posR=new Array()
            radi=new Array()
            tx=""
            positions()
            
            for (i=0; i<numb_s;i++) 
             {                                                                
             posY[i]=hei_scr/2
             posX[i]=wid_scr/2
             posR[i]=Math.random()*6.283
             radi[i]=0
             if (ns)
              {
              tx+="<layer z-Index=0 name=star_"+i+" left=0 top=0 width=1 height=1 bgColor=#ffffff></layer>"
              }
              else
              {
              document.write("<div id=star_"+i+"  style='z-index:0; position:absolute; left:0;top:0;width:1;height:1;background:#ffffff'><img  width=1 height=1></div>")
              }
             if(ns){document.write (tx);tx=""}
            }
            function go_stars(){
            positions()
            rad_max=Math.sqrt(wid_scr*wid_scr+hei_scr*hei_scr)/2
            for (i=0; i < numb_s;i++){
             rad=Math.sqrt(Math.pow((posY[i]-hei_scr/2),2)+Math.pow((posX[i]-wid_scr/2),2))/rad_max*4+1
             posY[i]+=Math.round(Math.sin(posR[i])*rad*speed_s);
             posX[i]+=Math.round(Math.cos(posR[i])*rad*speed_s);
             if ((posX[i] > wid_scr-rad*2) || (posY[i] < 0 ) || (posY[i] > hei_scr-rad*2) || (posX[i] < 0))
              {
              posY[i]=hei_scr/2
              posX[i]=wid_scr/2
              posR[i]=Math.random()*6.283
              sizeSlide("star_"+i,1,1)
              moveSlide("star_"+i,posX[i]+x_scrl,posY[i]+y_scrl)
              }
             else{
              if(Math.floor(rad)!=radi[i]){sizeSlide("star_"+i,rad,rad);radi[i]=rad}
              moveSlide("star_"+i,posX[i]+x_scrl,posY[i]+y_scrl)
              } 
             }
            }
            starSpeed=setInterval('go_stars()',15);
            </script>
            </font></b></p>
            <layer z-Index="2">
              <div style="position: relative">
              </div>
            </layer>
    
            <style type="text/css">
                
              * {
                margin:0px;
                padding:0px;
              }
              
              #header {
                margin:auto;
                width:500px;
                font-family:Arial, Helvetica, sans-serif;
              }
              
              ul, ol {
                list-style:none;
              }
              
              .nav > li {
                float:left;
              }
              
              .nav li a {
                background-color:#000;
                color:#fff;
                text-decoration:none;
                padding:10px 12px;
                display:block;
              }
              
              .nav li a:hover {
                background-color:#434343;
              }
              
              .nav li ul {
                display:none;
                position:absolute;
                min-width:140px;
              }
              
              .nav li:hover > ul {
                display:block;
              }
              
              .nav li ul li {
                position:relative;
              }
              
              .nav li ul li ul {
                right:-140px;
                top:0px;
              }
              
            </style>
<style type="text/css">
h1 { text-align: center; }
td { padding: 0.2em 2em ; }
</style>	

</head>
<body>
  <FORM NAME="FORM" METHOD="POST" ACTION="comprobar.php"></FORM>
<FONT COLOR="WHITE"><h1>VALORACION</h1>
<p>Nota: Esta valoracion nos ayudara, a mejorar su experiencia como usuario de nuestra plataforma.<br>
<br>
Gracias por su prefererencia.<br>
</p></FONT>
<form action="comprobar.php" method="post"/>
<FONT COLOR="WHITE">
<p>Nombre: <input type="text" name="nombre"/>   
   Apellidos: <input type="text" name="apellidos" size="40"/>   
   e-mail: <input type="text" name="email" size="35"/></p>
<p>contraseña: <input type="password" name="contras"/><br/>
<table>
   <tr>
   <td>
     <fieldset>
   sexo<br/>
   <input type="radio" name="sexo" value="Hombre"/> Hombre<br/>
   <input type="radio" name="sexo" value="Mujer"/> Mujer</p>
   <input type="radio" name="sexo" value="Otro"/> Otro</p>
  </fieldset>
   </td>
   <td>
     <fieldset>
   Nivel de estudios<br/>
   <input type="radio" name="estudios" value="elemental" checked="checked">
     Certificado escolar<br/>
   <input type="radio" name="estudios" value="basico"/> 
     Graduado en E.S.O.<br/>
   <input type="radio" name="estudios" value="bachiller"/> 
     Bachiller - Formación Profesional <br/>
   <input type="radio" name="estudios" value="Diplomado"/> 
     Diplomado<br/>
   <input type="radio" name="estudios" value="licenciado"/> 
     Licenciado o Doctorado<br/></FONT>
    </fieldset>
   </td>
</table>
<p>Su opinión: <br/>
<textarea name="comentario" rows="5" cols="50">Comentario: </textarea>
<p><input type="submit" value="Comprobar el formulario"> 
   <input type="reset" value="borrar todo"></p>
</form>
</body>