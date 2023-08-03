<?php #menu.view.php

echo '
<div class="u-clearfix u-sheet u-sheet-1">
  <nav
    class="u-menu u-menu-dropdown u-offcanvas u-menu-1"
    data-responsive-from="MD"
  >
    <div
      class="menu-collapse"
      style="font-size: 1rem; letter-spacing: 0px"
    >
      <a
        class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
        href="#"
      >
        <svg class="u-svg-link" viewBox="0 0 24 24">
          <use
            xmlns:xlink="http://www.w3.org/1999/xlink"
            xlink:href="#menu-hamburger"
          ></use>
        </svg>
        <svg
          class="u-svg-content"
          version="1.1"
          id="menu-hamburger"
          viewBox="0 0 16 16"
          x="0px"
          y="0px"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          xmlns="http://www.w3.org/2000/svg"
        >
          <g>
            <rect y="1" width="16" height="2"></rect>
            <rect y="7" width="16" height="2"></rect>
            <rect y="13" width="16" height="2"></rect>
          </g>
        </svg>
      </a>
    </div>
    <div class="u-custom-menu u-nav-container">
      <ul class="u-nav u-spacing-30 u-unstyled u-nav-1">
        <li class="u-nav-item">
          <a
            class="u-border-2 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-15 u-text-hover-palette-1-light-2 u-text-white"
            href="./exit.php"
            style="padding: 10px 0px"
            >Salir</a
          >
        </li>
        <li class="u-nav-item">
          <a
            class="u-border-2 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-15 u-text-hover-palette-1-light-2 u-text-white"
            href="#"
            style="padding: 10px 0px"
            >Reparaciones</a
          >
          <div class="u-nav-popup">
            <ul
              class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"
            >
              <li class="u-nav-item">
                <a
                  class="u-button-style u-nav-link u-white"
                  href="ordenes-trabajo.html"
                  >Listado de Ordenes</a
                >
              </li>
              <li class="u-nav-item">
                <a
                  class="u-button-style u-nav-link u-white"
                  href="nueva-orden.html"
                  >Nueva Orden</a
                >
              </li>
            </ul>
          </div>
        </li>
        <li class="u-nav-item">
          <a
            class="u-border-2 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-15 u-text-hover-palette-1-light-2 u-text-white"
            href="#"
            style="padding: 10px 0px"
            >Clientes</a
          >
          <div class="u-nav-popup">
            <ul
              class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3"
            >
              <li class="u-nav-item">
                <a
                  class="u-button-style u-nav-link u-white"
                  href="clientes.html"
                  >Listado de Clientes</a
                >
              </li>
              <li class="u-nav-item">
                <a
                  class="u-button-style u-nav-link u-white"
                  href="nuevo-cliente.html"
                  >Ingresar Cliente</a
                >
              </li>
            </ul>
          </div>
        </li>
        <li class="u-nav-item">
          <a
            class="u-border-2 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-15 u-text-hover-palette-1-light-2 u-text-white"
            href="#"
            style="padding: 10px 0px"
            >Articulos</a
          >
          <div class="u-nav-popup">
            <ul
              class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4"
            >
              <li class="u-nav-item">
                <a
                  class="u-button-style u-nav-link u-white"
                  href="articulos.html"
                  >Listado de Articulos</a
                >
              </li>
              <li class="u-nav-item">
                <a
                  class="u-button-style u-nav-link u-white"
                  href="nuevo-articulo.html"
                  >Nuevo Artículo</a
                >
              </li>
            </ul>
          </div>
        </li>
        <li class="u-nav-item">
          <a
            class="u-border-2 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-15 u-text-hover-palette-1-light-2 u-text-white"
            href="configuracion.html"
            style="padding: 10px 0px"
            >Configuración</a
          >
        </li>
      </ul>
    </div>
    <div class="u-custom-menu u-nav-container-collapse">
      <div
        class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav"
      >
        <div class="u-inner-container-layout u-sidenav-overflow">
          <div class="u-menu-close"></div>
          <ul
            class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-5"
          >
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link" href="actividad.html"
                >Actividad</a
              >
            </li>
            <li class="u-nav-item">
              <a
                class="u-button-style u-nav-link"
                href="ordenes-trabajo.html"
                >Reparaciones</a
              >
              <div class="u-nav-popup">
                <ul
                  class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-6"
                >
                  <li class="u-nav-item">
                    <a
                      class="u-button-style u-nav-link"
                      href="ordenes-trabajo.html"
                      >Listado de Ordenes</a
                    >
                  </li>
                  <li class="u-nav-item">
                    <a
                      class="u-button-style u-nav-link"
                      href="nueva-orden.html"
                      >Nueva Orden</a
                    >
                  </li>
                </ul>
              </div>
            </li>
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link" href="clientes.html"
                >Clientes</a
              >
              <div class="u-nav-popup">
                <ul
                  class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-7"
                >
                  <li class="u-nav-item">
                    <a
                      class="u-button-style u-nav-link"
                      href="clientes.html"
                      >Listado de Clientes</a
                    >
                  </li>
                  <li class="u-nav-item">
                    <a
                      class="u-button-style u-nav-link"
                      href="nuevo-cliente.html"
                      >Ingresar Cliente</a
                    >
                  </li>
                </ul>
              </div>
            </li>
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link" href="articulos.html"
                >Articulos</a
              >
              <div class="u-nav-popup">
                <ul
                  class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-8"
                >
                  <li class="u-nav-item">
                    <a
                      class="u-button-style u-nav-link"
                      href="articulos.html"
                      >Listado de Articulos</a
                    >
                  </li>
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link"
                      >Nuevo Artículo</a
                    >
                  </li>
                </ul>
              </div>
            </li>
            <li class="u-nav-item">
              <a
                class="u-button-style u-nav-link"
                href="configuración.html"
                >Configuración</a
              >
            </li>
            <li class="u-nav-item">
              <a
                class="u-button-style u-nav-link"
                href="./exit.php"
                >Salir</a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
    </div>
  </nav>
    <a
    href="https://www.mobilphonecr.com"
    class="u-image u-logo u-image-1"
    data-image-width="80"
    data-image-height="40"
  >
    <img
      class="u-logo-image u-logo-image-1"
      src="./public/img/b78c1c47-c604-4ca8-9934-e25928046c8b.png"
    />
  </a>
  <h4>Empresa</h4>


  </div>

';

?>