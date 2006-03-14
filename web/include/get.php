
<p class="angryzakk">The Quake 3 engine is open source, this does <strong>not</strong>
mean that Quake 3 Arena the game is free. You must purchase the game to use the data!</p>
<h2>Get icculus.org/quake3</h2>
<p>There are three methods of installation. The preffered way is to use an official
installer.</p>
<ul>
	<li><a href="?page=get&amp;method=official">Offical Installers</a></li>
	<li><a href="?page=get&amp;method=unofficial">Unofficial installers and packages</a></li>
	<li><a href="?page=get&amp;method=source">Build from source-code</a></li>
</ul>
<?php
include("downloads.php");

foreach ($downloads as $os => $desc) {
	$installers .= "<li>$desc</li>\n";
}

$official ="
<h2>Sanctioned Installers</h2>
<p>We have provided installers for the most popular platforms icculus.org/quake3
supports. These have been tested, and if they do not work you can report bugs to us
about them.</p>
<ul>
	$installers
</ul>";

$unofficial = '<h2>Using packages for your Operating System</h2>
<p>If you\'re lucky your Operating System provider or someone else using it may have already
done all of the work for you. Please report problems with these to those who are
guilty.</p>
<ul>
	<li>
		<h3>Debian &amp; Ubuntu</h3>
		<p>There are packages for the i386 and amd64 versions of
		Ubuntu and Debian Linux, thanks to <a href="http://wwwcip.informatik.uni-erlangen.de/~sibrklei/">
		Bruno "Fuddl" Kleinert</a>.</p>
			<ul>
				<li><a href="http://wwwcip.informatik.uni-erlangen.de/~sibrklei/debian/unstable/">
				Packages for Debian Linux.</a> These are intended for Debian unstable.</li>
				<li><a href="http://wwwcip.informatik.uni-erlangen.de/~sibrklei/ubuntu/breezy">
				Packages for Ubuntu Linux.</a> These are intended for Ubuntu Breezy.</li>
			</ul>
		<p>To install these, as root run <tt>dpkg -i
		<em>package.deb</em></tt>.</p>
		<p>There are also i686 <a href="http://www.xs4all.nl/~bruijn9/quake3/breezy/">binaries
		built on Ubuntu</a> made by Pascal de Bruijn. Untar this into /opt/
		or where ever you keep weird isolated installs. There is a decent
		chance these will work on most distributions, these are not
		<tt>.deb</tt>s.</p>
	</li>
	<li>
		<h3>Fedora Core, RHEL</h3>
		<p>Ed "Sketch" Byrne has been so kind as to provide i386 RPMs for
		<a href="http://www.openverse.com/quake3/"> Fedora Core 3, Fedora
		Core 4, and RedHat Enterprise Linux 4</a>. Be sure to read his
		<a href="http://www.openverse.com/quake3/Readme.html">Readme</a>
		to learn how to install it.</p>
	</li>
	<li>
		<h3>Gentoo</h3>
		<p><a href="http://www.gentoo.org/">Gentoo</a> users can just <tt>
		emerge quake3</tt> to get a recent snapshot of our Subversion repository.</p>
	</li>
</ul>';

$source =
'<h2>Check out and build from Subversion</h2>
<h3>Prerequisites</h3>
<ul>
     <li><a href="http://libsdl.org/">SDL</a> is required (everywhere but Windows), Linux users need development packages if they want to compile the game. You can optionally disable SDL in the Makefile but this configuration is currently untested.</li>
     <li><a href="http://www.openal.org/">OpenAL</a> is optionally disable-able. Apple Mac OS X 10.4 comes with OpenAL.</li>
     <li><a href="http://subversion.tigris.org/">Subversion</a> is used for acquiring our modified version of the id source code. If you\'re using a binary package, then you won\'t need this.</li>
     <li><a href="http://www.apple.com/">Apple Mac OS X</a> users need X Code installed for gcc, and <a href="http://metissian.com/projects/macosx/subversion/">subversion</a> and other interesting things.</li>
</ul>
<p><em>This part assumes Windows users are using <a href="http://www.cygwin.com">Cygwin</a>.
If you aren\'t, <a href="http://tortoisesvn.tigris.org/">TortoiseSVN</a> is a good
client.</em></p>
<ol>
	<li>Change into a directory that you want the tree to be kept in.</li>
	<li>Check out the source tree:<br />
	<tt>svn co svn://svn.icculus.org/quake3/trunk quake3</tt>
	<br />
	(You can check out a specific revision with the -r option, like this:
	<tt>svn co svn://svn.icculus.org/quake3/trunk quake3 -r100</tt>)
	</li>
	<li>Read the <a href="http://svn.icculus.org/*checkout*/quake3/trunk/README">README</a>
	file. Really. Do it.</li>
	<li>Compile and install Quake 3:
		<ul>
			<li><h3>Linux and friends</h3>
			<p>We all can compile it ourselves:</p>
				<ol>
					<li>Agree to the EULA and grab the <a href="?page=getdata">
					updated <tt>pk3</tt> files</a>. Extract it to someplace like
					<tt>/opt/quake3</tt>.</li>
					<li>Change into the top level directory (it contains
					the <tt>ui</tt> and
					<tt>code</tt> directories.)</li>
					<li>Run <tt>make</tt>.</li>
					<li>Set <tt>$COPYDIR</tt> to the
					directory you installed Quake3 to and make
					the copyfiles target. Make sure you are
					changed to the owner of	this path (probably
					root).<br />
					<tt>COPYDIR="/opt/quake3" make copyfiles</tt>
					</li>
				</ol>
			</li>
			<li><h3>Mac OS X</h3>
			<ol>
				<li>Change into the top level directory (it contains
				the <tt>ui</tt> and
				<tt>code</tt> directories.)</li>
				<li>Run <tt>make</tt>.</li>
				<li>Install the latest point release for OS X.</li>
				<li>Copy <tt>ioquake3.ppc</tt>
				in <tt>build/release-darwin-ppc/</tt>
				to <tt>/Applications/Quake3/Quake3.app/Contents/MacOS/Quake3</tt>.</li>
				<li>You need a libSDL-1.2.0.dylib in that .app\'s
				MacOS directory.</li>
				<li>You need to copy your <tt>pak0.pk3</tt>
				from your Quake	3 CD-ROM\'s <tt>/baseq3</tt>
				directory to your <tt>/Applications/Quake3/baseq3</tt>
				directory.</li>
				<li>Ditto for the Team Arena mission pack, though
				you would be substituting <tt>baseq3</tt>
				in the above example for <tt>missionpack</tt>.</li>
			</ol>
			<p>After you\'ve done all of that, you can double click
			on the <tt>.app</tt> file, or change to
			the <tt>/Applications/Quake3/</tt> directory in a terminal
			and run the binary.
			</p>
			</li>
			<li><h3>Windows</h3>
				<p>Building on Windows is slightly complicated.
				You can either use Microsoft Visual C++ or MinGW.
				MinGW works better currently; both methods are described
				in the
				<a href="http://svn.icculus.org/*checkout*/quake3/trunk/README">README</a>
				that you already are supposed to have read.</p>
			</li>
		</ul>
	</li>
	<li>If everything has gone well, you should have a binary that works! If not, seek
	<a href="?page=help">help</a>.</li>
</ol>';

switch ($_GET['method']){
	case "official":
		echo $official;
		break;
	case "unofficial":
		echo $unofficial;
		break;
	case "source":
		echo $source;
		break;
	default:
		echo $official;
		break;
}
?>
