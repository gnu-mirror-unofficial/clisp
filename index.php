<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- <?php $headers = getallheaders(); ?> -->
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <meta http-equiv="description" content="CLISP homepage"/>
 <meta http-equiv="keywords"
  content="clisp, lisp, common lisp, cl, open-source, free software"/>
 <meta http-equiv="description" content="CLISP resources"/>
 <link rel="stylesheet" href="clisp.css" type="text/css"/>
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
<img src="clisp.gif" width="48" height="48" alt="[CLISP Logo]"/></p>

<table align="center" cellspacing="5" border="15">
<tr><th>Current version:</th><th>2.27 (2001-07-17)</th>
<td><a href="ftp://clisp.cons.org/pub/lisp/clisp/source/latest/"
       >sources/FTP</a></td>
<td><a href="ftp://clisp.cons.org/pub/lisp/clisp/binaries/latest/"
       >binaries/FTP</a></td>
<td><a href="http://sourceforge.net/project/showfiles.php?group_id=1355"
       >SourceForge downloads/HTTP</a></td>
</tr></table>

<table width="100%" cellspacing="5" border="5">
<tr><th>Our Project</th><th>Related Projects</th></tr>
<tr valign="top"><td>
<dl>
 <dt><a href="summary.html">What is CLISP?</a></dt>
  <dd>a feature-loaded implementation of a great language!</dd>
 <dt><a href="propaganda.html">The benefits of Common Lisp and CLISP</a></dt>
  <dd>why is Common Lisp such a great programming environment?</dd>
 <dt><a href="resources.html">CLISP and Common Lisp via FTP and WWW</a></dt>
  <dd>links to CLISP sources and binaries as well as general Lisp
   information</dd>
 <dt><a href="clisp.html">CLISP manual page for Linux</a></dt>
  <dd>command line options for other platforms are very similar</dd>
 <dt><a href="impnotes.html">CLISP Implementation Notes</a></dt>
  <dd>How CLISP implements the ANSI standard</dd>
 <dt><a href="clreadline.html">CLISP's line editing facilities</a></dt>
  <dd>CLISP uses GNU readline</dd>
 <dt><a href="clash.html">CLISP as a login shell</a></dt>
  <dd>You can use CLISP instead of
   <a href="http://cnswww.cns.cwru.edu/~chet/bash/bashtop.html">bash</a> or
   <a href="http://hpcf.nersc.gov/software/os/shells/tcsh/">tcsh</a>!</dd>
 <dt><a href="http://www.lisp.org/HyperSpec/FrontMatter/">Common Lisp
     HyperSpec</a></dt>
  <dd>the HTML version of the ANSI standard X3.226-1994
   <cite>"Information Technology - Programming Language - Common
   Lisp"</cite></dd>
 <dt><a href="http://sourceforge.net/projects/clisp">Project
     Home</a></dt>
  <dd><ul>
   <li><a href="http://sourceforge.net/mail/?group_id=1355">mailing
    lists</a></li>
   <li><a href="http://sourceforge.net/bugs/?group_id=1355">bug
    reports</a></li>
   <li><a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/clisp">CVS
    browsing</a>
    [<a
    href="http://cvs.sourceforge.net/cvstarballs/clisp-cvsroot.tar.gz"
    >tarball</a>]</li>
   <li><a href="http://sourceforge.net/survey/?group_id=1355">surveys</a></li>
   <li><a href="http://sourceforge.net/project/showfiles.php?group_id=1355"
          >files released</a></li>
   <li><a href="http://sourceforge.net/people/?group_id=1355">help
    wanted</a></li>
   <li><a href="http://sourceforge.net/pm/?group_id=1355">tasks</a></li>
  </ul></dd>
 </dl>
</td>
<td><strong>Related Sourceforge Projects</strong>
   (<a href="http://sourceforge.net/search/">search</a>)
 <dl>
  <dt><strong>Le Sursis</strong>
      [<a href="http://sourceforge.net/projects/sursis">project</a>
       <a href="http://sursis.sourceforge.net/">home</a>]</dt>
   <dd>a tool for writing CGI scripts in Lisp.</dd>
  <dt><strong>Steel Bank CL</strong>
      [<a href="http://sourceforge.net/projects/sbcl">project</a>
       <a href="http://sbcl.sourceforge.net/">home</a>]</dt>
   <dd>a Common Lisp development system derived from the CMU CL system</dd>
  <dt><strong>CLOCC</strong>
      [<a href="http://sourceforge.net/projects/clocc">project</a>
       <a href="http://clocc.sourceforge.net/">home</a>]</dt>
   <dd>the Common Lisp Open Code Collection</dd>
  <dt><strong>Series</strong>
      [<a href="http://sourceforge.net/projects/series">project</a>
       <a href="http://series.sourceforge.net/">home</a>]</dt>
   <dd>translates functional-style expressions into efficient loops</dd>
  <dt><strong>ILISP</strong>
      [<a href="http://sourceforge.net/projects/ilisp">project</a>
       <a href="http://ilisp.cons.org/">home</a>]</dt>
   <dd>a comprehensive (X)Emacs interface for an inferior Common Lisp,
    or other Lisp based languages.</dd>
  <dt><strong>MatLisp</strong>
      [<a href="http://sourceforge.net/projects/matlisp">project</a>
       <a href="http://matlisp.sourceforge.net/">home</a>]</dt>
   <dd>a package for Common Lisp for handling matrices with real-valued
    or complex-valued elements.
    <a href="http://www.netlib.org/blas">BLAS</a> is used for elementary
    matrix operations and
    <a href="http://www.netlib.org/lapack">LAPACK</a> is used for linear
    algebra routines.</dd>
  <dt><strong>Common Lisp ORB</strong>
      [<a href="http://sourceforge.net/projects/clorb">project</a>
       <a href="http://clorb.sourceforge.net/">home</a>]</dt>
   <dd>CLORB is an Object Request Broker implementing <a
    href="http://www.corba.org/">CORBA</a> 2.  It currently supports
    DII, DSI and the POA.  The goal is to make the mapping follow the
    proposed mapping for LISP, but currently this is only half
    done.</dd>
  <dt><strong>LISA - Lisp Intelligent Software Agents</strong>
      [<a href="http://sourceforge.net/projects/lisa">project</a>
       <a href="http://lisa.sourceforge.net">home</a>]</dt>
   <dd>a production rule system for Common Lisp.
    Its purpose is to provide extensive support for the development of
    intelligent applications.
    LISA uses a CLOS implementation of the Rete algorithm.
    LISA is based on
    <a href="http://www.ghg.net/clips/CLIPS.html">CLIPS</a> and
    <a href="http://herzberg.ca.sandia.gov/jess/">Jess</a>.</dd>
  <dt><strong>cCLan - Comprehensive Common Lisp Archive Net</strong>
      [<a href="http://sourceforge.net/projects/cclan">project</a>
       <a href="http://cclan.sourceforge.net">home</a>]</dt>
   <dd>The goal is to facilitate the distribution of Lisp software
    (and attendant utilities) in an integrated manner,
    much as CTAN does for (La)TeX or CPAN for Perl.</dd>
 </dl>
 <strong>Other Projects</strong>
 <dl>
  <dt><a href="http://cmucl.cons.org/cmucl/">CMU CL</a></dt>
   <dd>Carnegie-Mellon University Public Domain UNIX Common Lisp</dd>
  <dt><a href="http://www.cs.cmu.edu/afs/cs.cmu.edu/project/ai-repository/ai/lang/lisp/0.html">CMU Common Lisp Repository</a></dt>
   <dd>Lots of Lisp code there!</dd>
  <dt><a href="http://lsp.everest.com/">Lisp Server Pages</a></dt>
   <dd>a system implemented in Common Lisp for generating dynamic HTML
    from scripted pages.</dd>
  <dt><a href="http://ww.telent.net/cliki/">CLiki</a></dt>
   <dd>This site intends to provide a collection of links to and
    resources for free software implemented in Common Lisp and available
    on Unix-like systems.</dd>
 </dl>
 </td></tr>
</table>

<table align="center" cellpadding="2" border="5">
<tr><th colspan="2">Currently active developers:</th></tr>
<tr><th><a href="http://sf.net/users/haible">Bruno Haible</a></th>
 <td align="center">
  <a href="http://clisp.cons.org/~haible">http://clisp.cons.org/~haible</a>
</td></tr>
<tr><th><a href="http://sf.net/users/sds">Sam Steingold</a></th>
 <td align="center">
  <a href="http://clisp.cons.org/~sds">http://clisp.cons.org/~sds</a>
</td></tr>
<tr><th colspan="2">Please direct all CLISP-related issues to
<a href="http://lists.sourceforge.net/mailman/listinfo/clisp-list"
 >&lt;clisp-list&gt;</a> and <em>not</em> to the developers.
 </th></tr></table>

<p class="center"><a href="http://petition.eurolinux.org"><img
src="patent_button.gif" width="88" height="36" alt="no patents"/></a></p>

<hr/>
<p>This project is hosted by <a href="http://sourceforge.net"><img
src="http://sourceforge.net/sflogo.php?group_id=1355&amp;type=1" width="88"
height="31" alt="SourceForge Logo"/></a>, which is, in turn,
supported by <a href="http://www.valinux.com">VA Linux Systems</a>.</p>

<p>This project is <strong>NOT</strong> supported by these or any other
company or organization.</p>

<p>All contents here is copyright by Bruno Haible and Sam Steingold and
is released under the <a href="http://www.gnu.org/copyleft/fdl.html">GNU
Free Documentation License</a></p>

<hr/>
<table width="100%"><tr><td align="left">
 <a href="http://clisp.cons.org"><img src="clisp.gif" width="48"
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
