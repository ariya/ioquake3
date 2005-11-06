<h2>Check out and build from Subversion</h2>
<p>( This part assumes Windows users are using Cygwin. If you aren't,
<a href="http://tortoisesvn.tigris.org/">TortoiseSVN</a> is a good client. )</p>
<ol>
	<li>Change into a directory that you want the tree to be kept in.</li>
	<li>Check out the source tree:<br />
	<span class="shell">svn co svn://svn.icculus.org/quake3/trunk quake3</span>
	<br />
	(You can check out a specific revision with the -r option, like this:
	<span class="shell">svn co svn://svn.icculus.org/quake3/trunk quake3 -r100</span>)
	</li>
	<li>Read the <a href="http://svn.icculus.org/*checkout*/quake3/trunk/i_o-q3-readme">readme</a>
	file. Really. Do it.</li>
	<li>Compile and install Quake 3:
		<ul>
			<li><h3>Linux and friends</h3>
				<ol>
					<li>Install Quake 3 for Linux using the latest point release
					installer. While the Quake3 engine is Free Software, you
					still need to copy over legal PK3s like before.</li>
					<li>Change into the top level directory (it contains the
					<span class="shell">ui</span> and <span class="shell">code</span>
					directories.)</li>
					<li>Run <span class="shell">make</span>.</li>
					<li>Set <span class="shell">$COPYDIR</span> to the directory
					you installed Quake3 to	and make the copyfiles target.
					Make sure you are changed to the owner of this path (probably
					root).<br />
					<span class="shell">COPYDIR="/opt/quake3" make copyfiles</span></li>
				</ol>
			</li>
			<li><h3>Windows</h3>
				<p>Building on Windows is slightly complicated. You can either
				use Microsoft Visual C++ or MinGW. MinGW works better currently;
				both methods are described in the
				<a href="http://svn.icculus.org/*checkout*/quake3/trunk/i_o-q3-readme">readme</a>
				you already are supposed to have read.</p>
			</li>
		</ul>
	</li>
	<li>If everything has gone well, you should have a binary that works! If not, seek
	help.</li>
</ol>
<h2>Something isn't working right, Heeeeeeeelp!</h2>
<p>You have four choices for help, documentaton, the mailing list, the IRC channel, and bugzilla. There is some
great documentation for Linux users at <a href="http://www.icculus.org/lgfaq/">http://www.icculus.org/lgfaq/</a>, and also at id's
original page (though you should no-longer contact them for support) <a href="http://zerowing.idsoftware.com/linux/q3a/">
http://zerowing.idsoftware.com/linux/q3a/</a>. Windows users and Mac users should just <a href="http://www.google.com/">google</a> their errors to check for pre-existant solutions. To subscribe to the mailing list send a blank e-mail to
<a href="mailto:quake3-subscribe@icculus.org">quake3-subscribe@icculus.org</a>. Then address your e-mails to 
<a href="mailto:quake3@icculus.org">quake3@icculus.org</a> . To join the irc channel, connect your client to
<span class="shell">irc.freenode.net</span> <span class="shell">#icculus.org/quake3</span>. To file a bug report with 
bugzilla, check out our bugzilla website at <a href="http://bugzilla.icculus.org/">http://bugzilla.icculus.org/</a>.</p>

<h2>Pay your dues, contribute!</h2>
<p>If you've come up with an improvement or fixed something, we'd love to hear about it!
Firstly, <em>try</em> to make sure that the patch breaks less than it fixes. We don't
require everyone to be decorated Geniuses, but do attempt to produce a patch that you've
tested and at list sort-of understand what you're doing.</p>

<p>The preferred way to get the ball rolling on a patch is to file a
<a href="http://bugs.icculus.org">Bugzilla bug</a> for your request with the patch attached
to it and then send a notice to the mailing list (send mail to <a href="mailto:quake3-subscribe@icculus.org">quake3-subscribe@icculus.org</a> to subscribe) about it. If you're really so lazy that
you can't do this, we would prefer you at least <a href="mailto:zakk@icculus.org">mail
it to zakk@icculus.org</a> rather than not do anything at all.</p>

<p>Please make it clear if the patch you're submitting for inclusion isn't yours. Point
out where you found it and who authored it. This is so we know who to attribute
<del>blame to when it horribly breaks things</del> credit to.</p>

<h2>Generating Patches</h2>
<p>If you know how to code, but never made a patch before, that's okay. Here's the 10¢
survival guide to generating patches.</p>
<ul>
	<li>
		<h3>From <acronym title="Subversion">SVN</acronym></h3>
		<p>If you checked the source code out with <acronym title="Subversion">SVN</acronym>,
		the client makes it rather easy to generate patches. In fact it's a function
		of the client itself. Once you've made a change in your checkout that is
		not upstream, here is how you use it:</p>
		<ul>
			<li>Create a patch named <em class="shell">amazing_new_feature.patch</em>:</li>
			<li><span class="shell">svn diff &gt; <em>amazing_new_feature.patch</em></span></li>
			<li id="patch">Apply a patch <em class="shell">amazing_new_feature.patch</em>:<br />
			<span class="shell">patch -p0 -i <em>amazing_new_feature.patch</em></span></li>
		</ul>
	</li>
	<li>
		<h3>From a tarball or other release</h3>
		<p>If you didn't get the source code via <acronym title="Subversion">SVN</acronym>,
		or for some reason that doesn't work for your situations, here's how to generate
		them using the tried-and-trusted <span class="shell">diff</span> tool between
		two files:</p>
		<ul>
			<li>Create a patch named <em class="shell">amazing_new_feature.patch</em> between <em class="shell">oldfile</em> and <em class="shell">newfile</em>:<br />
			<span class="shell">diff -u <em>oldfile</em> <em>newfile</em> &gt; <em>amazing_new_feature.patch</em></span></li>
			<li>Create a patch named <em class="shell">amazing_new_features.patch</em> between directory <em class="shell">olddir</em> and <em class="shell">newdir</em>:<br />
			<span class="shell">diff -Naur <em>olddir</em> <em>newdir</em> &gt; <em>amazing_new_features.patch</em></span></li>
			<li>Applying a patch is the same as with SVN, see  <a href="#patch">above</a>.</li>
		</ul>
	</li>
</ul>
<p>For more information on <span class="shell">diff</span>, <span class="shell">patch</span>,
and <span class="shell">svn</span>, read their respective <span class="shell">man</span>
and <span class="shell">info</span> pages. For a more in-depth guide on Subversion take
a look at the <a href="http://svnbook.red-bean.com/"><acronym title="Subversion">SVN</acronym>
Book</a>.</p>
