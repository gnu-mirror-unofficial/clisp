<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- <?php $headers = getallheaders(); ?> -->
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <meta http-equiv="description" content="CLISP homepage"/>
 <meta http-equiv="keywords"
  content="clisp, lisp, common lisp, cl, open-source, free software"/>
 <meta http-equiv="description" content="CLISP resources"/>
 <link rev="made" href="mailto:clisp-list@lists.sourceforge.net"/>
 <link rel="stylesheet" href="clisp.css" type="text/css"/>
 <link rel="icon" href="clisp.png" type="image/png"/>
 <link rel="shortcut icon" href="clisp.png" type="image/png"/>
 <title>CLISP - an ANSI Common Lisp</title>
</head>

<body>
<h1>Welcome to
  <a href="http://clisp.cons.org">CLISP home</a></h1>

<!-- ?php for(reset($headers); $key = key($headers); next($headers))
 { echo "headers[$key] = ".$headers[$key]."<br>\n"; } ?
 href="http://<?php print $headers[Host]; ?>" -->

<h2>This is
  <a href="http://www.gnu.org">GNU</a>
  <a href="http://sourceforge.net/projects/clisp">CLISP</a>
   - an <a href="http://www.ansi.org/">ANSI</a>
  <a href="http://www.lisp.org/">Common Lisp</a></h2>

<p class="center">
<img src="clisp.png" width="48" height="48" alt="[CLISP Logo]"/></p>

<table cellspacing="5" border="15">
<tr><th>Current version:</th><th>2.28 (2002-03-03)</th></tr></table>

<table width="100%" cellspacing="5" border="5">
 <col width="70%"/><col width="30%"/>
 <thead><tr><th>About CLISP</th><th>Get CLISP</th></tr></thead>
<tr valign="top"><td><dl>
 <dt><strong><a href="summary.html">What is CLISP?</a></strong></dt>
  <dd>a feature-loaded implementation of a great language!</dd>
 <dt><strong><a href="propaganda.html">The benefits of Common Lisp and
   CLISP</a></strong></dt>
  <dd>why is ANSI Common Lisp such a great programming environment?</dd>
 <dt><strong><a href="clisp.html">CLISP manual page for UN*X</a></strong></dt>
  <dd>command line options for other platforms are very similar</dd>
 <dt><strong><a href="impnotes.html">CLISP Implementation
   Notes</a> <a href="impnotes/">[TOC]</a></strong></dt>
  <dd>How CLISP implements the <a href="http://www.ansi.org/">ANSI</a>
   standard <a href="http://webstore.ansi.org/ansidocstore/product.asp?sku=ANSI+X3%2E226%2D1994">X3.226-1994</a>
   <cite>"Information Technology - Programming Language - Common
    Lisp"</cite>, available as the
   <a href="http://www.lisp.org/HyperSpec/FrontMatter/">Common Lisp
    HyperSpec</a>.</dd>
 <dt><strong><a href="clreadline.html">CLISP's line editing
   facilities</a></strong></dt>
  <dd>CLISP uses GNU
   <a href="http://cnswww.cns.cwru.edu/~chet/readline/rltop.html"
      >readline</a>.</dd>
 <dt><strong><a href="clash.html">CLISP as a login shell</a></strong></dt>
  <dd>You can use CLISP instead of
   <a href="http://cnswww.cns.cwru.edu/~chet/bash/bashtop.html">bash</a> or
   <a href="http://hpcf.nersc.gov/software/os/shells/tcsh/">tcsh</a>!</dd>
 <dt><strong><a href="resources.html">Common Lisp on the Web</a></strong></dt>
  <dd>information and software</dd>
 <dt><strong><a href="faq.html">CLISP FAQ list</a></strong></dt>
  <dd>Frequently Asked Questions about CLISP, with answers.</dd>
 <dt><strong><a href="http://sourceforge.net/projects/clisp"
                >SourceForge Project Home</a></strong></dt>
  <dd><ul>
   <li><a href="http://sourceforge.net/mail/?group_id=1355"
          >mailing lists</a></li>
   <li><a href="http://sourceforge.net/bugs/?group_id=1355"
          >bug reports</a></li>
   <li><a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/clisp/"
          >CVS browsing</a>
    [<a href="http://cvs.sourceforge.net/cvstarballs/clisp-cvsroot.tar.gz"
     >tarball</a>]</li>
   <li><a href="http://sourceforge.net/survey/?group_id=1355">surveys</a></li>
   <li><a href="http://sourceforge.net/people/?group_id=1355">help
    wanted</a></li>
   <li><a href="http://sourceforge.net/pm/?group_id=1355">tasks</a></li>
  </ul></dd>
 <dt><strong><a href="http://clisp.cons.org">CLISP</a> elsewhere</strong></dt>
  <dd><ul>
   <li><a href="http://www.gnu.org">GNU</a>
       <a href="http://www.gnu.org/directory/">Free Software Directory</a>
     - <a href="http://www.gnu.org/directory/clisp.html">CLISP</a> and
       <a href="http://www.gnu.org/search/fsd-search.py?q=lisp">Lisp</a></li>
   <li><a href="http://freshmeat.net/projects/clisp/">FreshMeat</a></li>
   <li><a href="http://www.opensourcedirectory.org/projects/clisp/"
       >Open Source Directory</a></li>
   <li><a href="http://www2.iro.umontreal.ca/~pinard/po/registry.cgi?domain=clisp">Help translate CLISP messages into your language!</a></li>
  </ul></dd>
 <dt><strong>Search
   <a href="http://clisp.cons.org"><code>clisp.cons.org</code></a>
   with <a href="http://www.google.com/search"
   ><img src="http://www.google.com/logos/Logo_40wht.gif"
   alt="Google"/></a></strong></dt>
  <dd><form method="get" action="http://www.google.com/custom"><ins>
   <input type="text" name="q" size="31" maxlength="255" value=""/>
   <input type="submit" name="sa" value="Search"/>
   <input type="hidden" name="sitesearch" value="clisp.cons.org"/>
   </ins></form></dd>
 <dt><strong>How are <a href="http://sourceforge.net/survey/survey.php?group_id=1355&amp;survey_id=12508">you</a> using CLISP?</strong></dt>
  <dd>Tell us your story!</dd>
 </dl>
</td>
<td><dl>
 <dt><strong>Home</strong></dt>
  <dd><ul>
    <li><a href="http://clisp.cons.org/">http://clisp.cons.org/</a></li>
    <li><a href="http://www.clisp.org/">http://www.clisp.org/</a></li>
    <li><a href="http://clisp.sourceforge.net/"
                >http://clisp.sourceforge.net/</a></li>
    <li><a href="http://www.gnu.org/software/clisp/"
                >http://www.gnu.org/software/clisp/</a></li></ul></dd>
 <dt><strong>Sources and binaries for various Unix, DOS, OS/2,
   Windows, Amiga, Acorn, Mac platforms</strong></dt>
  <dd><ul>
    <li><a href="http://sourceforge.net/project/showfiles.php?group_id=1355"
       >SourceForge downloads/HTTP</a></li>
    <li><a href="ftp://cvs2.cons.org/pub/lisp/clisp/"
                >ftp://cvs2.cons.org/pub/lisp/clisp/</a></li>
    <li><a href="http://cvs2.cons.org/ftp-area/clisp/"
                >http://cvs2.cons.org/ftp-area/clisp/</a></li>
    <li><a href="ftp://ftp.gnu.org/pub/gnu/clisp/"
                >ftp://ftp.gnu.org/pub/gnu/clisp/</a></li>
    <li><a href="http://ftp.gnu.org/pub/gnu/clisp/"
                >http://ftp.gnu.org/pub/gnu/clisp/</a></li>
    <li><a href="ftp://sunsite.unc.edu/pub/Linux/devel/lang/lisp/"
                >ftp://sunsite.unc.edu/pub/Linux/devel/lang/lisp/</a></li>
    <li><a
     href="ftp://ftp.tu-darmstadt.de/pub/programming/languages/lisp/clisp/"
          >a German mirror</a></li>
    <li><a href="ftp://ftp.ntnu.no/pub/languages/common_lisp/clisp/"
           >a Norwegian mirror</a> (<strong>dated!</strong>)</li>
    <li><a href="ftp://tsx-11.mit.edu/pub/linux/packages/lisp/"
           >TSX-11</a> (<strong>very dated!</strong>)</li>
   </ul></dd>
 <dt><strong>Debian packages</strong></dt>
  <dd><ul>
    <li><a href="http://packages.debian.org/unstable/interpreters/clisp.html"
           >unstable</a> (current)</li>
    <li><a href="http://packages.debian.org/stable/interpreters/clisp.html"
           >stable</a> (obsolete)</li>
   </ul></dd>
 <dt><strong><a href="http://fink.sourceforge.net/">Fink</a> -
   Unix software for your Mac</strong></dt>
  <dd><a href="http://fink.sourceforge.net/pdb/package.php/clisp"
              >Package CLISP</a></dd>
 <dt><strong>AIX binaries</strong></dt>
  <dd><a href="http://aixpdslib.seas.ucla.edu/packages/clisp.html"
              >UCLA School of Engineering &amp; Applied Science</a></dd>
</dl></td></tr></table>

<table cellpadding="2" border="5">
<tr><th colspan="2">Currently active developers:</th></tr>
<tr><th><a href="http://sf.net/users/haible">Bruno Haible</a></th>
 <td align="center">
  <a href="http://www.haible.de/bruno/">http://www.haible.de/bruno/</a>
</td></tr>
<tr><th><a href="http://sf.net/users/sds">Sam Steingold</a></th>
 <td align="center">
  <a href="http://www.podval.org/~sds/">http://www.podval.org/~sds/</a>
</td></tr>
<tr><th colspan="2">Please direct all CLISP-related issues to
<a href="http://lists.sourceforge.net/mailman/listinfo/clisp-list"
 >&lt;clisp-list&gt;</a> and <em>not</em> to the developers.
 </th></tr></table>

<p class="center"><a href="http://petition.eurolinux.org"><img
src="patent_button.png" width="88" height="36" alt="no patents"/></a></p>

<hr/>
<p>This project is hosted by <a href="http://sourceforge.net"><img
src="http://sourceforge.net/sflogo.php?group_id=1355&amp;type=1" width="88"
height="31" alt="SourceForge Logo"/></a>, which is, in turn,
supported by <a href="http://www.vasoftware.com">VA Software</a>.</p>

<p>This project is <strong>NOT</strong> supported by these or any other
company or organization.</p>

<p>All contents here is copyright by Bruno Haible and Sam Steingold and
is released under the <a href="http://www.gnu.org/copyleft/fdl.html">GNU
Free Documentation License</a></p>

<hr/>
<table width="100%"><tr><td align="left">
 <a href="http://clisp.cons.org"><img src="clisp.png" width="48"
    height="48" alt="[CLISP home]"/></a></td>
 <td align="right"><a href="http://validator.w3.org/check/referer"><img
     src="http://www.w3.org/Icons/valid-xhtml10"
     alt="Valid XHTML" height="31" width="88"/></a>
 <a href="http://www.w3.org/Style/CSS/Buttons/"><img
    src="http://www.w3.org/Style/CSS/Buttons/mwcts"
    alt="Use CSS" height="31" width="88"/></a>
 <a href="http://jigsaw.w3.org/css-validator/check/referer"><img
    src="http://jigsaw.w3.org/css-validator/images/vcss"
    alt="Valid CSS" height="31" width="88"/></a></td>
</tr></table>

</body>
</html>
