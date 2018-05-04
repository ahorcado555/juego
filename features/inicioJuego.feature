Feature: Jugar TRIQUI
 
Scenario jugador 
QUIERO  ver un  tablero de triqui
PARA  marcar mis Jugadas
 
Scenario: Iniciar el Juego
     Given I am on "/"
     Then I should see "Juego de triqui"

Scenario: Ver Tablero de Juego
     Given I am on "/"
     Then I should see 9 "td" elements

Scenario: Ver Tablero de Juego
     Given I am on "/"
     Then I should see 9 "input" elements

Scenario: Ver boton de confirmar
     Given I am on "/"
     Then I should see "Confirmar" in the "button" element

Scenario: Ver Jugar
     Given I am on "/"
     Then I should see "Jugar"



