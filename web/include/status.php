<h2>Port Status</h2>
<p>Here is a table of the most up to date information we have regarding icculus.org/Quake3's working status on different operating systems. There are things to bear in mind when viewing this:
</p>
<ul>
	<li>The status column refers only to the latest information we are given, so it may be out of date.</li>
	<li>"Working" doesn't always imply "usable", see the <em>Notes</em> column.</li>
	<li>Status is one of <em>working</em>, <em>broken</em> or <em>unknown</em>.</li>
</ul>
<table>
	<caption>Status of Port Targets</caption>
	<tr>
		<th scope="col"><acronym title="Operating System">OS</acronym></th>
		<th scope="col">Platform</th>
		<th scope="col">Status</th>
		<th scope="col"><acronym title="Last Known Working Revision">LKWR</acronym></th>
		<th scope="col">Notes</th>
	</tr>
	<tr>
		<td scope="row" rowspan="4">Linux</td> <!--OS-->
		<td>gcc-x86</td> <!--Platform-->
		<td>working</td> <!--Status-->
		<td></td> <!--LKWR-->
		<td></td> <!--Notes-->
	</tr>
	<tr>
		<td>gcc-x86_64</td> <!--Platform-->
		<td>working</td> <!--Status-->
		<td></td> <!--LKWR-->
		<td>x86_64 JIT bytecode compiler disabled by default.</td> <!--Notes-->
	</tr>
	<tr>
		<td>gcc-ppc</td> <!--Platform-->
		<td>working</td> <!--Status-->
		<td></td> <!--LKWR-->
		<td>Altivec build has similar problems to OS X G4 build.</td> <!--Notes-->
	</tr>
	<tr>
		<td>gcc-alpha</td> <!--Platform-->
		<td>working</td> <!--Status-->
		<td></td> <!--LKWR-->
		<td>Dedicated server only with VM interpreter.</td> <!--Notes-->
	</tr>
	<tr>
		<td scope="row" rowspan="2">Windows</td> <!--OS-->
		<td>mingw-x86</td> <!--Platform-->
		<td>broken</td> <!--Status-->
		<td><a href="http://svn.icculus.org/quake3/trunk/?rev=372">372</a></td> <!--LKWR-->
		<td>Included OpenAL headers are too old right now.</td> <!--Notes-->
	</tr>
	<tr>
		<td>MSVC-x86</td> <!--Platform-->
		<td>broken</td> <!--Status-->
		<td><a href="http://svn.icculus.org/quake3/trunk/?rev=342">342</a></td> <!--LKWR-->
		<td>Project needs updating for codec system and OpenAL.</td> <!--Notes-->
	</tr>
	<tr>
		<td scope="row" rowspan="2">Max OS X</td> <!--OS-->
		<td>xcode-G3</td> <!--Platform-->
		<td>working</td> <!--Status-->
		<td></td> <!--LKWR-->
		<td></td> <!--Notes-->
	</tr>
	<tr>
		<td>xcode-G4</td> <!--Platform-->
		<td>working</td> <!--Status-->
		<td></td> <!--LKWR-->
		<td>Client has severe graphical glitches.</td> <!--Notes-->
	</tr>
	<tr>
		<td scope="row">Max OS 9</td> <!--OS-->
		<td>codewarrior?</td> <!--Platform-->
		<td>broken</td> <!--Status-->
		<td></td> <!--LKWR-->
		<td>Getting dropped unless anybody objects soon.</td> <!--Notes-->
	</tr>
	<tr>
		<td scope="row">FreeBSD</td> <!--OS-->
		<td>gcc-x86</td> <!--Platform-->
		<td>working</td> <!--Status-->
		<td></td> <!--LKWR-->
		<td></td> <!--Notes-->
	</tr>
	<tr>
		<td scope="row" rowspan="2">Solaris</td> <!--OS-->
		<td>gcc-x86</td> <!--Platform-->
		<td>working</td> <!--Status-->
		<td></td> <!--LKWR-->
		<td></td> <!--Notes-->
	</tr>
	<tr>
		<td>gcc-sparc</td> <!--Platform-->
		<td>working</td> <!--Status-->
		<td></td> <!--LKWR-->
		<td>Release build crashes.</td> <!--Notes-->
	</tr>
	<tr>
		<td scope="row">IRIX</td> <!--OS-->
		<td>cc-*</td> <!--Platform-->
		<td>broken</td> <!--Status-->
		<td></td> <!--LKWR-->
		<td>Patch pending, I think.</td> <!--Notes-->
	</tr>
</table>
<p>You can keep an eye on the Subversion repository via the <a href="http://svn.icculus.org/quake3/trunk/">
Web interface</a>.</p>

<h2>Implemented Features</h2>
<ul>
	<li><a href="http://www.openal.org/">OpenAL</a> support for sound. Surround
	sound supported.</li>
	<li><a href="http://libsdl.org" title="Simple DirectMedia Layer">SDL</a> being used
	for input, OpenGL context management, and sound. Though not on Windows yet.</li>
	<li>Colors converted to ANSI escape codes in terminal output.
	(set <span class="shell">ttycon_ansicolor</span> to 1 to enable this.)</li>
	<li>More supported platforms, see the table above.</li>
</ul>

<h2>PunkBuster Support</h2>
<p><a href="http://www.evenbalance.com/">Even Balance</a>'s Punkbuster support can never
be included with any open-source version of Quake 3 due to it being removed from the
source-code before the release, and the binary-only nature of its anti-cheating software.
</p>
<p>While it is possible that someone could write an open-source equivilant of PunkBuster,
it's not very feasable for a number of reasons.</p>
