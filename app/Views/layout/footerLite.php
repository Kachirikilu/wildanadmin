   <!-- Foother -->

   <center>
       <div id="footer">
           <div id="WadahKaki">
               <div id="WadahKakiText1">
                   <div id="DIVaFooter"><a href="https://elearning.unsri.ac.id/" target="_blank" id="aFooter">E-Learning UNSRI</a></div>
                   <div id="DIVaFooter"><a href="https://codeigniter4.github.io/userguide/" target="_blank" id="aFooter">CodeIgniter 4</a></div>
                   <div id="DIVaFooter"><a href="https://flatuicolors.com/" target="_blank" id="aFooter">Flaituicolors</a></div>
                   <div id="DIVaFooter"><a href="https://ionic.io/ionicons/usage" target="_blank" id="aFooter">Ionicons 5.5.2</a></div>
                   <div id="DIVaFooter"><a href="https://wa.me/628985655826" target="_blank" id="aFooter">WhatsApp</a></div>
                   <div id="DIVaFooter"></div>
                   <div id="DIVaFooter"><a href="/beta" id="aFooter">V4.17.647 Lite</a></div>

                   <!-- ========================================= -->
                   <!-- V4.17.64 Stable -->
                   <!-- V => Web Version -->
                   <!-- 3 => Interface -->
                   <!-- 17 => View -->
                   <!-- 64 => Structure -->
                   <!-- 007 => Custom View -->
                   <!-- ========================================= -->
                   <!-- Stable => Full Release -->
                   <!-- Lite => Lite Version -->
                   <!-- BETA => Experimental Version -->
                   <!-- Alpha => Developers Only -->
                   <!-- ========================================= -->

               </div>
               <div id="WadahKakiText2">
                   <?php if (session()->get('Pangkat') !== null) { ?>
                       <div id="DIVaFooter"><a href="/chat" id="aFooter">Chat Feature</a></div>
                       <div id="DIVaFooter"><a href="/mobile" id="aFooter">Mobile Edition</a></div>
                       <div id="DIVaFooter"><a href="/custom" id="aFooter">Submit Custom</a></div>
                       <div id="DIVaFooter"><a href="logout" id="aFooter">Logout</a></div>
                   <?php } else { ?>
                       <div id="DIVaFooter"><a href="/chat" id="aFooter">Chat Feature</a></div>
                       <div id="DIVaFooter"><a href="/custom" id="aFooter">Submit Custom</a></div>
                       <div id="DIVaFooter"><a href="/login" id="aFooter">Login</a></div>
                   <?php } ?>
               </div>
               <div id="WadahKakiPicture">
                   <a href="https://unsri.ac.id/" target="_blank"><button style="background: transparent; border: 0" id="pictureIMGButton">
                           <div><img src="/FileWeb/UNSRI Logo.png" class="pictureKaki"></div>
                       </button></a>
               </div>
           </div>
       </div>
   </center>

   <!-- Foother -->

   </div>
   <!-- Home -->

   </div>
   </div>
   </div>
   </div>
   </div>

   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js?v=<?php echo time(); ?>"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js?v=<?php echo time(); ?>"></script>
   <script src="/CSS & JS/adminLite.js?v=<?php echo time(); ?>" defer></script>

   </div>

   </body>

   </html>