<h2>Something isn't working right. Heeeeeeeelp!</h2>
<p>You have four choices for help: documentation, You can try asking on th
<a href="?page=discuss"> the mailing list, the IRC channel,</a>
and Bugzilla. There is some great documentation for Linux users at the
<a href="http://www.icculus.org/lgfaq/">Linux Gamers' FAQ</a>, and also at
id's <a href="http://zerowing.idsoftware.com/linux/q3a/">original page</a> (though you
should no-longer contact them for support). Windows users and Mac users should just
<a href="http://www.google.com/">Google</a> their errors to check for preexisting solutions.
You can try asking on the <a href="?page=discuss">mailing list and
<acronym title="Internet Relay Chat">IRC</acronym> channel.</a>. To file a bug report
with Bugzilla, check out our <a href="http://bugzilla.icculus.org/">Bugzilla website</a>.
Make sure that you check documentation, and read the
<a href="http://www.icculus.org/lgfaq/">Linux Gamers' FAQ</a> before asking for 
help! Most questions people have are not unique!</p>

<h2 id="cvar">New Cvars &amp; Commands</h2>
<p>Icculus.org/quake3 has introduced a number of new cvars and commands, mostly
because of new features.</p>
<table>
	<caption>Cvar Additions</caption>
	<tr>
		<th scope="col">Cvar</th>
		<th scope="col">Type</th>
		<th scope="col">Description</th>
	</tr>
	<tr>
		<td class="shell">cl_autoRecordDemo</td> <td>Boolean</td>
		<td>Record a new demo on each map change.</td>
	</tr>
	<tr>
		<td class="shell">cl_aviFrameRate</td> <td>Integer</td>
		<td>The framerate to use when capturing video.</td>
	</tr>
	<tr>
		<td class="shell">cl_aviMotionJpeg</td> <td>Boolean</td>
		<td>Use the mjpeg codec when capturing video.</td>
	</tr>
	<tr><td colspan="3"></td></tr> <!-- Space -->
	<tr>
		<td class="shell">s_useOpenAL</td> <td>Boolean</td>
		<td>Use the OpenAL sound backend if it's available.</td>
	</tr>
	<tr>
		<td class="shell">s_alPrecache</td> <td>Boolean</td>
		<td>Cache OpenAL sounds before use.</td>
	</tr>
	<tr>
		<td class="shell">s_alGain</td> <td>Float</td>
		<td>The value of <tt>AL_GAIN</tt> for each source.</td>
	</tr>
	<tr>
		<td class="shell">s_alSources</td> <td>Integer</td>
		<td>The total number of sources (memory) to allocate.</td>
	</tr>
	<tr>
		<td class="shell">s_alDopplerFactor</td> <td>Float</td>
		<td>The value passed to <tt>alDopplerFactor()</tt>.</td>
	</tr>
	<tr>
		<td class="shell">s_alDopplerSpeed</td> <td>Float</td>
		<td>The value passed to <tt>alDopplerVelocity()</tt>.</td>
	</tr>
	<tr>
		<td class="shell">s_alMinDistance</td> <td>Float</td>
		<td>The value of <tt>AL_REFERENCE_DISTANCE</tt> for each source.</td>
	</tr>
	<tr>
		<td class="shell">s_alRolloff</td> <td>Float</td>
		<td>The value of <tt>AL_ROLLOFF_FACTOR</tt> for each source.</td>
	</tr>
	<tr>
		<td class="shell">s_alMaxSpeakerDistance</td> <td>Float</td>
		<td><tt>ET_SPEAKERS</tt> beyond this distance are culled.</td>
	</tr>
	<tr>
		<td class="shell">s_alDriver</td> <td>String</td>
		<td>Which OpenAL library to use.</td>
	</tr>
	<tr><td colspan="3"></td></tr> <!-- Space -->
	<tr>
		<td class="shell">s_sdlBits</td> <td>Integer</td>
		<td>SDL bit resolution.</td>
	</tr>
	<tr>
		<td class="shell">s_sdlSpeed</td> <td>Integer</td>
		<td>SDL sample rate.</td>
	</tr>
	<tr>
		<td class="shell">s_sdlChannels</td> <td>Integer</td>
		<td>SDL number of channels.</td>
	</tr>
	<tr>
		<td class="shell">s_sdlDevSamps</td> <td>Integer</td>
		<td>SDL DMA buffer size override.</td>
	</tr>
	<tr>
		<td class="shell">s_sdlMixSamps</td> <td>Integer</td>
		<td>SDL mix buffer size override.</td>
	</tr>
	<tr><td colspan="3"></td></tr> <!-- Space -->
	<tr>
		<td class="shell" id="ttycon">ttycon_ansicolor</td> <td>Boolean</td>
		<td>Enable the addition of <tt>ANSI</tt> escape codes for colors in the tty.</td>
	</tr>
	<tr>
		<td class="shell">r_GLlibCoolDownMsec</td> <td>Integer</td>
		<td>Wait for a number of milliseconds to close GL library.</td>
	</tr>
	<tr>
		<td class="shell">com_altivec</td> <td>Boolean</td>
		<td>Enable the use of Altivec on PowerPC systems.</td>
	</tr>
	<tr>
		<td class="shell">s_backend</td> <td><dfn title="Read Only">RO</dfn> String</td>
		<td>Indicates the current sound backend.</td>
	</tr>
	<tr>
		<td class="shell">cl_consoleHistory</td> <td><dfn title="Read Only">RO</dfn> String</td>
		<td>Stores the console history.</td>
	</tr>
	<tr>
		<td class="shell">cl_platformSensitivity</td> <td><dfn title="Read Only">RO</dfn> Float</td>
		<td>Indicates the mouse input scaling.</td>
	</tr>
</table>
<table>
	<caption>New Commands</caption>
	<tr>
		<th scope="col">Command</th>
		<th scope="col">Description</th>
	</tr>
	<tr>
		<td class="shell">video <em>&lt;filename&gt;</em></td>
		<td>Start video capture (use with <tt>demo</tt> command). Outputs to 
		<tt><em>filename</em></tt>.</td>
	</tr>
	<tr>
		<td class="shell">stopvidep</td>
		<td>Stop the video capture.</td>
	</tr>
</table>

<h2 id="native">Using shared libraries instead of <acronym title="Quake Virtual Machine">QVM</acronym>s</h2>
<p>To force Q3 to use shared libraries instead of
<acronym title="Quake Virtual Machine">QVM</acronym>s run it with the following parameters:
<br /><tt>+set sv_pure 0 +set vm_cgame 0 +set vm_game 0 +set vm_ui 0</tt></p>

<h2>Using Demo Data Files</h2>
<p>Copy <tt>demoq3/pak0.pk3</tt> from the demo installer to your <tt>baseq3</tt>
directory. The <acronym title="Quake Virtual Machine">QVM</acronym> files in this
<tt>pak0.pk3</tt> will not work, so you have to use the <a href="#native">native
shared libraries</a> or <acronym title="Quake Virtual Machine">QVM</acronym>s from
this project. To use the new <acronym title="Quake Virtual Machine">QVM</acronym>s,
they must be put into a <tt>.pk3</tt> file. A <tt>pk3</tt> file is just a zip file,
so any compression tool that can create such files will work. The shared libraries
should already be in the correct place.</p>
<p>Please bear in mind that you will not be able to play online using the demo data,
nor is it something that we like to spend much time maintaining or supporting.</p>

<h2>64-bit Mods</h2>
<p>If you wish to compile external mods as shared libraries on a 64bit platform,
and the mod source is derived from the id Q3 SDK, you will need to modify the
interface code a little. Open the files ending in <tt>_syscalls.c</tt> and change
every instance of <tt>int</tt> to intptr_t in the declaration of the <tt>syscall</tt>
function pointer and the <tt>dllEntry</tt> function. Also find the vmMain function
for each module (usually in <tt>cg_main.c</tt>, <tt>g_main.c</tt>, etc.) and similarly
replace the return value in the prototype with <tt>intptr_t (arg0, arg1, ...stay int)</tt>.
</p><p>
Add the following code snippet to <tt>q_shared.h</tt>:
<pre>#ifdef Q3_VM
typedef int intptr_t;
#else
#include &lt;stdint.h&gt;
#endif</pre>
<em>Note: if you simply wish to run mods on a 64bit platform, you do <strong>not</strong>
need to recompile anything since by default Q3 uses a virtual machine system.</em></p>

<h2>Creating Mods Compatible With Quake III 1.32b</h2>
<p>If you're using this package to create mods for the last official release of
Quake III, it is necessary to pass the command-line option <tt>-vq3</tt> to your
invocation of <tt>q3asm</tt>. This is because by default <tt>q3asm</tt> outputs
an updated <acronym title="Quake Virtual Machine">QVM</acronym> format that is necessary
to fix a bug involving the optimizing pass of the x86 vm JIT compiler. Read
<a href="http://www.quakesrc.org/forums/viewtopic.php?t=5665">the web-forum post</a>
about this issue for more details.</p>

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
<del>blame</del> credit to.</p>

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
			<tt>svn diff &gt; <em>amazing_new_feature.patch</em></tt></li>
			<li id="patch">Apply a patch <em class="shell">amazing_new_feature.patch</em>:<br />
			<tt>patch -p0 -i <em>amazing_new_feature.patch</em></tt></li>
		</ul>
	</li>
	<li>
		<h3>From a tarball or other release</h3>
		<p>If you didn't get the source code via <acronym title="Subversion">SVN</acronym>,
		or for some reason that doesn't work for your situations, here's how to generate
		them using the tried-and-trusted <tt>diff</tt> tool between
		two files:</p>
		<ul>
			<li>Create a patch named <em class="shell">amazing_new_feature.patch</em> between <em class="shell">oldfile</em> and <em class="shell">newfile</em>:<br />
			<tt>diff -u <em>oldfile</em> <em>newfile</em> &gt; <em>amazing_new_feature.patch</em></tt></li>
			<li>Create a patch named <em class="shell">amazing_new_features.patch</em> between directory <em class="shell">olddir</em> and <em class="shell">newdir</em>:<br />
			<tt>diff -Naur <em>olddir</em> <em>newdir</em> &gt; <em>amazing_new_features.patch</em></tt></li>
			<li>Applying a patch is the same as with SVN, see  <a href="#patch">above</a>.</li>
		</ul>
	</li>
</ul>
<p>For more information on <tt>diff</tt>, <tt>patch</tt>,
and <tt>svn</tt>, read their respective <tt>man</tt>
and <tt>info</tt> pages. For a more in-depth guide on Subversion take
a look at the <a href="http://svnbook.red-bean.com/"><acronym title="Subversion">SVN</acronym>
Book</a>.</p>


<h2>Will you guys remove the CD-key check?</h2>
<p>
This is literally the only frequenty asked question we get, and it's starting to
wear on us. <strong>No,</strong> we will not be removing the CD-key check. The
Quake III: Arena data is <em>not</em> free, and you <strong>must</strong> purchase
a CD to play it! Don't let this confuse you, the engine is open source, and is absolutely
100% free. If someone makes a new game based on the source code that does not use
the pay-for game data, they of course don't need to and should not require a CD
key in their game.
</p>

