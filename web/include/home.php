<p>Quake 3 source code was released on August 20th by the fine folks at id Software. We thank them for that, and are continuing the mission of a Quake 3 that is without fault.</p>
<img src="images/quake3.jpg" class="right" alt="Logo" />
<h2>What's the point?</h2>
<p>This project aims to build upon id Software's Quake 3 source code release.
The source was released on August 20, 2005 under the GPL license. Since then, we have
feverishly been cleaning up, fixing bugs of, and adding features to it. Our eventual
goal is to have created <strong>the</strong> Quake3 source code distribution that people
base their games and mods with their own pointy goals upon. Our focus is initially
to get the game working with our updates on Mac OS X, Windows, and Linux. Sane new features are also welcome. Modern graphical upgrades (bloom lighting, etc) would have to be disabled by default.
</p>
<h2>Progress.</h2>
<p>While a lot is on the horizon, quite a few goals have been completed already. Quake 3
now works natively on x86_64 and PowerPC architectures, and the game builds and runs
in FreeBSD. SDL is now used for input / contexts / sound, making the game far easier to port
to new platforms and architectures. Many security holes and other problems have been repaired. A more in-depth database
of new features, working status of platforms, and bugs is the <a href="?page=status">Status</a>
section.</p>
<h2>The future</h2>
<p>Current goals for 1.34 (SVN is 1.33, last id build was 1.32) include:
</p>
<UL>
<LI> OpenAL support</LI>
<LI> Binaries for Windows XP and Mac OS X at release.</LI>
<LI> Linux will just get source unless somebody feels like setting up a new installer.</LI>
<LI> Removal of DirectX for MSVC and mingw builds.</LI>
</UL>
