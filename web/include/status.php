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
		<td scope="row" rowspan="3">Linux</td> <!--OS-->
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
		<td>working</td> <!--Status-->
		<td></td> <!--LKWR-->
		<td></td> <!--Notes-->
	</tr>
	<tr>
		<td>MSVC-x86</td> <!--Platform-->
		<td>working</td> <!--Status-->
		<td></td> <!--LKWR-->
		<td></td> <!--Notes-->
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
		<td scope="row" rowspan="2">Max OS 9</td> <!--OS-->
		<td>codewarrior?</td> <!--Platform-->
		<td>broken</td> <!--Status-->
		<td></td> <!--LKWR-->
		<td>There is a section in q_platform.h, but no project files. Drop it?</td> <!--Notes-->
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
		<td>broken</td> <!--Status-->
		<td></td> <!--LKWR-->
		<td></td> <!--Notes-->
	</tr>
	<tr>
		<td scope="row">IRIX</td> <!--OS-->
		<td>cc-*</td> <!--Platform-->
		<td>broken</td> <!--Status-->
		<td></td> <!--LKWR-->
		<td>Has a section in the Makefile, but nothing otherwise. Drop it?</td> <!--Notes-->
	</tr>
</table>

<h2>Implemented Features</h2>
<ul>
	<li><a href="http://libsdl.org" title="Simple DirectMedia Layer">SDL</a> being used
	for input, OpenGL context management, and sound. Though not on Windows yet.</li>
	<li>Colors converted to ANSI escape codes in terminal output.
	(set <span class="shell">ttycon_ansicolor</span> to 1 to enable this.)</li>
	<li>More supported platforms, see the table above.</li>
</ul>
