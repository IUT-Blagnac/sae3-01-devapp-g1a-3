<?php session_start() ?>
<header>
  <nav class="header_nav">
    <img class="logo" src="images/LogoParure.png" alt="Logo de notre entreprise">
    <ul>
      <li style = "list-style-type: none;">
        <a href="Entreprise.php" class="Header__nav__link--hasSubmenuv2"> 
            <span class="padded-element" data-text="Entreprise">Notre entreprise</span> 
        </a>
        <div class="Header__nav__submenu Header__nav__submenu--topLevel">
          <div class="container">
            <div class="Header__nav__submenu__blockv2">
              <ul>
                <li class=""> <button class="toggle__submenus" aria-expanded="false"></button>
                  <a href="Entreprise.php#a_propos" class="Header__nav__link--hasSubmenu">
                    <span> À propos de nous </span> 
                  </a>
                </li>
                <li class=""> <button class="toggle__submenus" aria-expanded="false"></button>
                  <a href="Entreprise.php#histoire" class="Header__nav__link--hasSubmenu">
                    <span> Notre histoire </span> 
                  </a>
                </li>
                <li class=""> <button class="toggle__submenus" aria-expanded="false"></button>
                  <a href="Entreprise.php#equipe" class="Header__nav__link--hasSubmenu">
                    <span> Notre équipe </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="header_marker"> 
      <li class=""> 
        <a href="ConsultMainCategorie.php?genre=H" class="Header__nav__link--hasSubmenuv2">  
          <span class="padded-element" data-text="Masculin"> Masculin</span> 
        </a>
        <div class="Header__nav__submenu Header__nav__submenu--topLevel">
          <div class="container">
            <div class="Header__nav__submenu__block">
              <ul>
                <li class=""> <button class="toggle__submenus" aria-expanded="false"></button>
                  <a href="ConsultCategorie.php?nomCateg=Sous-vetements&genre=H" class="Header__nav__link--hasSubmenu"> 
                    <span>Sous-vêtements</span>
                  </a>
                  <div class="Header__nav__submenu">
                    <div class="Header__nav__submenu__categories">
                      <ul>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Boxers&genre=H" class="Header__nav__link"> 
                            Boxers
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Slips&genre=H" class="Header__nav__link"> 
                            Slips
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Calecons&genre=H" class="Header__nav__link"> 
                            Caleçons
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Lots&genre=H" class="Header__nav__link"> 
                            Lots
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Sous-vetements%20de%20sport&genre=H" class="Header__nav__link"> 
                            Sous-vêtements de sport
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class=""> <button class="toggle__submenus" aria-expanded="false"></button>
                  <a href="ConsultCategorie.php?nomCateg=Lingerie%20Nuit&genre=H" class="Header__nav__link--hasSubmenu"> 
                    <span>Lingerie Nuit</span>
                  </a>
                  <div class="Header__nav__submenu">
                    <div class="Header__nav__submenu__categories">
                      <ul>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Pyjamas%20long&genre=H" class="Header__nav__link"> 
                            Pyjamas long
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Pyjamas%20short&genre=H" class="Header__nav__link"> 
                            Pyjamas short
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Peignoirs&genre=H" class="Header__nav__link"> 
                            Peignoirs
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class=""> <button class="toggle__submenus" aria-expanded="false"></button>
                  <a href="ConsultCategorie.php?nomCateg=Vetements&genre=H" class="Header__nav__link--hasSubmenu"> 
                    <span>Vêtements</span>
                  </a>
                  <div class="Header__nav__submenu">
                    <div class="Header__nav__submenu__categories">
                      <ul>
                        <li class="">
                          <a href="ConsultProduct.php?nomSousCateg=T-Shirts%20et%20polos&genre=H" class="Header__nav__link"> 
                            T-Shirts et polos
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Pulls&genre=H" class="Header__nav__link"> 
                            Pulls
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Sweats%20-%20Shirts&genre=H" class="Header__nav__link"> 
                            Sweat-Shirts
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Joggings&genre=H" class="Header__nav__link"> 
                            Joggings
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Pantalons&genre=H" class="Header__nav__link"> 
                            Pantalons
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Shorts%20et%20bermudas&genre=H" class="Header__nav__link"> 
                            Shorts et bermudas
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Chemises&genre=H" class="Header__nav__link"> 
                            Chemises
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Accessoires&genre=H" class="Header__nav__link"> 
                            Accessoires
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class=""> <button class="toggle__submenus" aria-expanded="false"></button>
                  <a href="ConsultCategorie.php?nomCateg=Chaussants&genre=H" class="Header__nav__link--hasSubmenu"> 
                    <span>Chaussants</span>
                  </a>
                  <div class="Header__nav__submenu">
                    <div class="Header__nav__submenu__categories">
                      <ul>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Chaussons&genre=H" class="Header__nav__link"> 
                            Chaussons
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Baskets&genre=H" class="Header__nav__link"> 
                            Baskets
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Chaussettes&genre=H" class="Header__nav__link"> 
                            Chaussettes
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Mules/Tongs&genre=H" class="Header__nav__link"> 
                            Mules/Tongs
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Lots%20de%20Chaussettes&genre=H" class="Header__nav__link"> 
                            Lots de chaussettes
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class=""> <button class="toggle__submenus" aria-expanded="false"></button>
                  <a href="ConsultCategorie.php?nomCateg=Maillots de bain&genre=H" class="Header__nav__link--hasSubmenu"> 
                    <span>Maillots de Bain</span>
                  </a>
                  <div class="Header__nav__submenu">
                    <div class="Header__nav__submenu__categories">
                      <ul>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Shorts%20de%20bain&genre=H" class="Header__nav__link"> 
                            Shorts de bain
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Boxers%20de%20bain&genre=H" class="Header__nav__link"> 
                            Boxers de bain
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="header_marker">
      <li class=""> 
        <a href="ConsultMainCategorie.php?genre=F" class="Header__nav__link--hasSubmenuv2">  
          <span data-text="Féminin"> Féminin</span> 
        </a>
        <div class="Header__nav__submenu Header__nav__submenu--topLevel">
          <div class="container">
            <div class="Header__nav__submenu__block">
              <ul>
                <li class=""> <button class="toggle__submenus" aria-expanded="false"></button>
                  <a href="ConsultCategorie.php?nomCateg=Sous-vetements&genre=F" class="Header__nav__link--hasSubmenu"> 
                    <span>Sous-vêtements</span>
                  </a>
                  <div class="Header__nav__submenu">
                    <div class="Header__nav__submenu__categories">
                      <ul>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Lots&genre=F" class="Header__nav__link"> 
                            Lots
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Soutiens-gorge&genre=F" class="Header__nav__link"> 
                            Soutiens-gorge
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Culottes&genre=F" class="Header__nav__link"> 
                            Culottes
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Ensemble%20de%20lingerie&genre=F" class="Header__nav__link"> 
                            Ensemble de lingerie
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Bodys&genre=F" class="Header__nav__link"> 
                            Bodys
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class=""> <button class="toggle__submenus" aria-expanded="false"></button>
                  <a href="ConsultCategorie.php?nomCateg=Pyjamas&genre=F" class="Header__nav__link--hasSubmenu"> 
                    <span>Pyjamas</span>
                  </a>
                  <div class="Header__nav__submenu">
                    <div class="Header__nav__submenu__categories">
                      <ul>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Pyjamas&genre=F" class="Header__nav__link"> 
                            Pyjamas
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Nuisettes&genre=F" class="Header__nav__link"> 
                            Nuisettes
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Chemise%20de%20Nuits&genre=F" class="Header__nav__link"> 
                            Chemise de Nuit
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Peignoirs&genre=F" class="Header__nav__link"> 
                            Peignoirs
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class=""> <button class="toggle__submenus" aria-expanded="false"></button>
                  <a href="ConsultCategorie.php?nomCateg=Vetements&genre=F" class="Header__nav__link--hasSubmenu"> 
                    <span>Vêtements</span>
                  </a>
                  <div class="Header__nav__submenu">
                    <div class="Header__nav__submenu__categories">
                      <ul>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=T-Shirts%20et%20chemisiers&genre=F" class="Header__nav__link"> 
                            T-Shirts et chemisiers
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Joggings,%20pantalons%20et%20shorts&genre=F" class="Header__nav__link"> 
                            Joggings, pantalons et shorts
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Pulls&genre=F" class="Header__nav__link"> 
                            Pulls
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Sweats%20-%20Shirts&genre=F" class="Header__nav__link"> 
                            Sweat-shirts
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Accessoires&genre=F" class="Header__nav__link"> 
                            Accessoires
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class=""> <button class="toggle__submenus" aria-expanded="false"></button>
                  <a href="ConsultCategorie.php?nomCateg=Chaussants&genre=F" class="Header__nav__link--hasSubmenu"> 
                    <span>Chaussants</span>
                  </a>
                  <div class="Header__nav__submenu">
                    <div class="Header__nav__submenu__categories">
                      <ul>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Chaussons&genre=F" class="Header__nav__link"> 
                            Chaussons
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Baskets&genre=F" class="Header__nav__link"> 
                            Baskets
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Chaussettes&genre=F" class="Header__nav__link"> 
                            Chaussettes
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Mules/Tongs&genre=F" class="Header__nav__link"> 
                            Mules/Tongs
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Collants&genre=F" class="Header__nav__link"> 
                            Collants
                          </a>
                        </li>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Lots%20de%20Chaussettes&genre=F" class="Header__nav__link"> 
                            Lots de chaussettes 
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class=""> <button class="toggle__submenus" aria-expanded="false"></button>
                  <a href="ConsultCategorie.php?nomCateg=Maillots de bain&genre=F" class="Header__nav__link--hasSubmenu"> 
                    <span>Maillots de Bain</span>
                  </a>
                  <div class="Header__nav__submenu">
                    <div class="Header__nav__submenu__categories">
                      <ul>
                        <li class=""> 
                          <a href="ConsultProduct.php?nomSousCateg=Maillots%20une%20piece&genre=F" class="Header__nav__link">
                            Maillots une pièce 
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </li>
    </ul>
    <div id="headerSearch" class="Header__search">
        <form action="" method="get" role="search" class="SearchBox">
          <input type="search" placeholder="Recherche" required="" name="recherche" autocomplete="off" value=""> 
          <button type="submit" title="Rechercher">
            <img src="images/loupe.png" alt="recherche" width="15" height="14">
            </svg><span class="visuallyhidden">Rechercher</span></button>
        </form>
    </div>
    <div id="images">
      <a href="index.php"><img src="images/maison.png" alt="Accueil"></a>
      <a href="FormConnexion.php"><img src="images/compte.png" alt="Compte"></a>
      <a href="Panier.php"><img src="images/panier.png" alt="Panier"></a>
      <?php 
      if (isset($_SESSION['acces'])) {
        echo '<a href="Deconnexion.php" onClick ="actionDelete()"> <img src="images/deco.png"> </a>';
      }
      ?>
    </div>
  </nav>
</header>

<script>
function actionDelete(){
  if(confirm('Supprimer les cookies ?')){
    <?php setcookie('cookIdent', "", time()-3600); ?>
    alert('Cookies supprimés !');
  }
}
</script>