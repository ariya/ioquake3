<p>We have not yet had an official release. Nonetheless, you can still get
icculus.org/quake3 a few distributions or build it yourself from Subversion.</p>
<p class="angryzakk">The Quake 3 engine is open source, this does <strong>not</strong>
mean that Quake 3 Arena the game is free. You must purchase the game to use the data!</p>

<h2>Using packages for your Linux Distribution</h2>
<p>If you're lucky your distribution or someone else using it may have already
done all of the work for you.</p>
<ul>
	<li>
		<h3>Gentoo</h3>
		<p><a href="http://www.gentoo.org/">Gentoo</a> users can just <span class="shell">
		emerge quake3</span> to get a recent snapshot of our Subversion repository.</p>
	</li>
	<li>
		<h3>SUSE</h3>
		<p>Ludwig Nussel works on this project and also provides
		<a href="ftp://ftp.gwdg.de/pub/linux/suse/ftp.suse.com/people/lnussel/quake3">
		RPMs for SUSE Linux Enterprise Server.</a> Note that these are just
		the binaries, no scripts or KDE/Gnome launchers to start them. Ludwig also
		mentions that the packages should work on any glibc 2.3 system.</p>
	</li>
</ul>

<h2>Check out and build from Subversion</h2>
<p><em>This part assumes Windows users are using <a href="http://www.cygwin.com">Cygwin</a>.
If you aren't, <a href="http://tortoisesvn.tigris.org/">TortoiseSVN</a> is a good
client.</em></p>
<ol>
	<li>Change into a directory that you want the tree to be kept in.</li>
	<li>Check out the source tree:<br />
	<span class="shell">svn co svn://svn.icculus.org/quake3/trunk quake3</span>
	<br />
	(You can check out a specific revision with the -r option, like this:
	<span class="shell">svn co svn://svn.icculus.org/quake3/trunk quake3 -r100</span>)
	</li>
	<li>Read the <a href="http://svn.icculus.org/*checkout*/quake3/trunk/README">README</a>
	file. Really. Do it.</li>
	<li>Compile and install Quake 3:
		<ul>
			<li><h3>Linux and friends</h3>
			<p>Everyone else can compile it themselves</p>
				<ol>
					<li>Install Quake 3 for Linux using the latest point
					release installer. While the Quake3 engine is Free
					Software, you still need to copy over legal PK3s like
					before.</li>
					<li>Change into the top level directory (it contains
					the <span class="shell">ui</span> and
					<span class="shell">code</span> directories.)</li>
					<li>Run <span class="shell">make</span>.</li>
					<li>Set <span class="shell">$COPYDIR</span> to the
					directory you installed Quake3 to and make the copyfiles
					target. Make sure you are changed to the owner of
					this path (probably root).<br />
					<span class="shell">COPYDIR="/opt/quake3" make copyfiles</span>
					</li>
				</ol>
			</li>
			<li><h3>Mac OS X</h3>
			  <p>Open <span class="shell">code/macosx/Quake3.pbproj</span> in
				XCode, press build. Enjoy!</p>
			</li>
			<li><h3>Windows</h3>
				<p>Building on Windows is slightly complicated. You can either
				use Microsoft Visual C++ or MinGW. MinGW works better currently;
				both methods are described in the
				<a href="http://svn.icculus.org/*checkout*/quake3/trunk/README">README</a>
				you already are supposed to have read.</p>
			</li>
		</ul>
	</li>
	<li>If everything has gone well, you should have a binary that works! If not, seek
	<a href="?page=help">help</a>.</li>
</ol>
<h2>Point Release Installers</h2>
<p>As of now, you still need to install the old point releases before this project
because they contain updated <span class="shell">pk3</span> files. We mirror them
for your convienience:</p>
<ul>
	<li><a href="http://filesingularity.timedoctor.org/linuxq3apoint-1.32b-3.x86.run">Linux</a></li>
	<li><a href="http://filesingularity.timedoctor.org/q3pointrelease_132.exe">Windows</a></li>
	<li><a href="http://filesingularity.timedoctor.org/Quake3-132.pkg.sit">Macintosh</a></li>
</ul>
