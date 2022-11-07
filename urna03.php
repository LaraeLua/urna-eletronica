<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urna Eletrônica</title>
    <link rel="stylesheet" href="styleurna03.css">
</head>
<body>
    <nav>Simulador de Urna Eletrônica</nav>
      <table border="1" style="margin-top: 10px; text-align: center;">
        <tr>
            <thead>
                <th height="100">Candidatos (Dep. Federal)</th>
                <th height="100">Partidos</th>
                <th>Número</th>
                <th height="100">Candidatos (Dep. Estadual)</th>
                <th height="100">Partidos</th>
                <th>Número</th>
                <th height="100">Candidatos (Senador)</th>
                <th height="100">Partidos</th>
                <th>Número</th>
                <th height="100">Candidatos (Governador)</th>
                <th height="100">Partidos</th>
                <th>Número</th>
                <th height="100">Candidatos (Presidente)</th>
                <th height="100">Partidos</th>
                <th>Número</th>
            </thead>
            <tbody>
                </tr>
                <tr>
                    <td width="10%">Pastor Abraão</td>
                    <td widht="10%" >Republicanos</td>
                    <td>1023</td>
                    <td width="10%">Adão Fernandes</td>
                    <td widht="10%" >PSOL</td>
                    <td>50333</td>
                    <td width="10%">Carlos Silva</td>
                    <td widht="10%" >PSTU</td>
                    <td>160</td>
                    <td width="10%">Chico Malta</td>
                    <td widht="10%" >PCB</td>
                    <td>21</td>
                    <td width="10%">Luiz Felipe d’Avila</td>
                    <td widht="10%" >Novo</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td >Adriana de Araújo</td>
                    <td>Agir</td>
                    <td>3688</td>
                    <td >Alberto Lima</td>
                    <td>Avante</td>
                    <td>70070</td>
                    <td >Erika Amorim</td>
                    <td>PSD</td>
                    <td>555</td>
                    <td >Serley Leal </td>
                    <td>UP</td>
                    <td>80</td>
                    <td >Léo Péricles</td>
                    <td>UP</td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>Adrielly Teixeira </td>
                    <td>PDT</td>
                    <td>1245</td>
                    <td>Cabo Erickson </td>
                    <td>PTB</td>
                    <td>14357</td>
                    <td >Kamila Cardoso</td>
                    <td>Avante</td>
                    <td>700</td>
                    <td >Zé Batista</td>
                    <td>PSTU</td>
                    <td>16</td>
                    <td >Simone Tebet</td>
                    <td>MDB</td>
                    <td>15</td>
                </tr>                
            </tbody>
      </table>

    <div class="urna">
        <div class="tela">
            <div class="info">
                <div class="div_left">
                    <div class="seuVoto">
                        <span>SEU VOTO PARA</span>
                    </div>
                    <div class="cargo">
                        <span>CARGO</span>
                    </div>
                    <div class="div_numeros">
                        <div class="numero pisca"></div>
                        <div class="numero"></div>
                    </div>
                    <div class="descricao">descricao</div>
                </div>
                <div class="div_right">imagens</div>
            </div>
            <div class="rodape_tela">
                Aperte a tecla: <br>
                CONFIRMA para CONFIRMAR este voto <br> 
                CORRIGE para REINICIAR este voto 
            </div>        
        </div>
        <div class="teclado">
            <div class="teclado_linha">
                <div class="teclado_botao" onclick= clicou(1)>1</div>
                <div class="teclado_botao" onclick= clicou(2)>2</div>
                <div class="teclado_botao" onclick= clicou(3)>3</div>
            </div>
            <div class="teclado_linha">
                <div class="teclado_botao" onclick= clicou(4)>4</div>
                <div class="teclado_botao" onclick= clicou(5)>5</div>
                <div class="teclado_botao" onclick= clicou(6)>6</div>
            </div>
            <div class="teclado_linha">
                <div class="teclado_botao" onclick= clicou(7)>7</div>
                <div class="teclado_botao" onclick= clicou(8)>8</div>
                <div class="teclado_botao" onclick= clicou(9)>9</div>
            </div>
            <div class="teclado_linha">
                <div class="teclado_botao" onclick= clicou(0)>0</div>
            </div>
            <div class="teclado_linha">
                <div class="teclado_botao btn_branco" onclick= branco()>BRANCO</div>
                <div class="teclado_botao btn_corrige" onclick= corrige()>CORRIGE</div>
                <div class="teclado_botao btn_confirma" onclick= confirma()>CONFIRMA</div>
            </div>
        </div>
    </div>

    <script src="etapas03.js"></script>
    <script src="urna03.js"></script>
</body>
</html>