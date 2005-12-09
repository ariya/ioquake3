<p>Quake 3 source code was released on August 20th by the fine folks at id Software.
We thank them for that, and are continuing the mission of producing a Quake 3 that is
without fault.</p>
<p class="angryzakk">The Quake 3 engine is open source, this does <strong>not</strong> mean that
Quake 3 Arena the game is free. You must purchase the game to use the data!</p>
<img src="images/thenameofthisprojectis3.jpg" class="right" alt="Logo" />

<h2>What's the point?</h2>
<p>This project aims to build upon id Software's Quake 3 source code release. The source
code was released on August 20, 2005 under the
<a href="http://www.gnu.org/copyleft/gpl.html" title="General Public License">GPL</a>.
Since then, we have been cleaning up, fixing bugs, and adding features. Our
eventual goal is to have created <em>the</em> Open-Source Quake 3 distribution upon which
people base their games, ports, and mods. We also aim to keep compatibility with the id data
in perpetuity, for both single player and multiplayer, plus mods (<a href="http://www.urbanterror.net/">Urban Terror</a>, <a href="http://www.rq3.com/">Reaction Quake 3</a>, etc)
Our focus initially is to get the game working with our updates on Mac OS X, Windows, and Linux.
Other platforms are a bonus. Sane new features are also welcome. Modern graphical upgrades
(ie. bloom lighting) would have to be disabled by default.
</p>
<p>
As an Open-Source project we expect comments and criticism to go the either the maintainer
<a href="mailto:zakk@timedoctor.org">zakk@timedoctor.org</a>, or more preferably
to the <a href="http://icculus.org/quake3/?page=discuss">mailing list</a>.
</p>
<h2>Progress</h2>
<p>While a lot is left to be done, quite a few goals have been met already. Quake 3
now works naively on x86-64 and PowerPC architectures, plus the game builds and runs
on <a href="http://www.freebsd.org/">FreeBSD</a>.
<a href="http://libsdl.org" title="Simple DirectMedia Layer">SDL</a> is now used for input,
OpenGL context management, and sound, making the game a lot easier to port to new platforms
and architectures than it was before. Security holes and other problems have been repaired.
A more in-depth database of new features and working status on different platforms is
on the <a href="?page=status">Status</a> section.</p>

<h2>The future</h2>
<p>Current goals for 1.34 (<acronym title="Subversion">SVN</acronym> is 1.33, the last
id build was 1.32) include:</p>
<ul>
	<li>Binaries for Windows XP and Mac OS X at release. Linux will just get a source
	package unless somebody feels inclined to set up a new installer.</li>
</ul>
<p>Goals for 1.35 include:</p>
<ul>
	<li>Remove DirectX from <acronym title="Microsoft Visual C++">MSVC</acronym> and <a href="http://mingw.org" title="Minimalist GNU for Windows">MinGW</a> builds, in favor of <a href="http://libsdl.org" title="Simple DirectMedia Layer">SDL</a>.</li>
</ul>
<p>Other features such as improved graphics and IPv6 support will be focused on
in later versions.</p>
