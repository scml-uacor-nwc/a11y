<?php

function display_a11y_banner() {?>
  <div class="a11y-banner">
    <div class="modal fade" style="background-color: red;" id="settings" tabindex="-1" role="dialog" aria-labelledby="settingsTitle" aria-hidden="true" data-bs-backdrop="static">
      <div id="settingsDialog" class="modal-dialog" role="document">
        <div id="settingsContent" class="modal-content">
          <div id="settingsHeader" class="modal-header">
            <i class="bi bi-gear keepStyle"></i>
            <h5 class="modal-title" id="settingsTitle">Preferências de plugin</h5>
            <a type="button" id="btn-cls" class="setUserPreferences" data-bs-dismiss="modal" aria-label="Close">Fechar</a>
          </div>
          <div id="modalBody" class="modal-body">
            <br>
            
            <div class="form-choices">
            <ul class="dropdown-list settings-menu">
                <li class="dropdown-list-item settings-menu-item">

                  <div class="form-check form-switch">
                      <input class="form-check-input useDevicePreferences" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                      <label class="form-check-label" for="flexSwitchCheckDefault">Usar preferências do Dispositivo</label>
                  </div>
                </li>
                <li class="dropdown-list-item settings-menu-item">
                  <div class="form-check form-switch">
                    <input 
                      class="form-check-input useHighContrast" 
                      type="checkbox" 
                      role="switch" 
                      id="flexSwitchCheckChecked"
                    >
                    <label 
                      onclick="myFunction_get()"
                      class="form-check-label" 
                      for="flexSwitchCheckChecked"
                    >Alto Contraste
                    </label>
                  </div>
                </li>

                <li class="dropdown-list-item settings-menu-item">
                  <div class="form-check form-switch">
                    <input 
                      class="form-check-input useAnimation"
                      type="checkbox" 
                      role="switch" 
                      id="AnimationToggle"
                      checked
                    >
                    <label
                      onclick="aosOff_get()" 
                      class="form-check-label"
                      for="AnimationToggle"
                    >Animações
                    </label>
                  </div>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div><!-- End of Modal Settings -->
  </div>
<?php
}