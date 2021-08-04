## Aplicação de tradução
-Microserviço de tradução de texto usando Google Translator

## Comandos para rodar a aplicação
- composer install
- php artisan serve

## Uso da aplicação
- Evite realizar diversas chamadas consecutivas na api pois o google pode detectar aumento de trafego para o seu ip e poderá bloquea-lo por algumas horas, o recomendado é ir chamando aos poucos caso tenha muita coisa pra traduzir

## POST localhost:8000/api/traduzir

```json
{
    "de" : "en",
    "para" : "pt-br",
    "texto" : "Quick and light. Weak at close range; excels at battle from distance"
}
