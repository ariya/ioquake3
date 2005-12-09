<h2>Something isn't working right. Heeeeeeeelp!</h2>
<p>You have four choices for help: documentation, the mailing list, the IRC channel,
and Bugzilla. There is some great documentation for Linux users at the
<a href="http://www.icculus.org/lgfaq/">Linux Gamers' FAQ</a>, and also at
id's <a href="http://zerowing.idsoftware.com/linux/q3a/">original page</a> (though you
should no-longer contact them for support). Windows users and Mac users should just
<a href="http://www.google.com/">Google</a> their errors to check for preexisting solutions.
You can try asking on the <a href="?page=discuss">mailing list and/or
<acronym title="Internet Relay Chat">IRC</acronym> channe.</a>. To file a bug report
with Bugzilla, check out our <a href="http://bugzilla.icculus.org/">Bugzilla website</a>.</p>

<h2>Pay your dues, contribute!</h2>
<p>If you've come up with an improvement or fixed something, we'd love to hear about it!
Firstly, <em>try</em> to make sure that the patch breaks less than it fixes. We don't
require everyone to be decorated Geniuses, but do attempt to produce a patch that you've
tested and at list sort-of understand what you're doing.</p>

<p>The preferred way to get the ball rolling on a patch is to file a
<a href="http://bugs.icculus.org">Bugzilla bug</a> for your request with the patch attached
to it and then send a notice to the <a href="?page=discuss">mailing list</a>
about it. If you're really so lazy that you can't do this, we would prefer you at
least <a href="mailto:zakk@icculus.org">mail it to zakk@icculus.org</a> rather than
not do anything at all.</p>

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
			<li>Create a patch named <em class="shell">amazing_new_feature.patch</em>:<br />
			<span class="shell">svn diff &gt; <em>amazing_new_feature.patch</em></span></li>
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
