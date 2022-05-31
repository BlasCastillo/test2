@extends('layouts.plantillapadre')
@section('plantillapadre')

<br><br><br>
<h2> Nuestro portafolio</h2>
<p>Somos inversores en criptomonedas, tradeamos con criptomonedas además de tener expertos en los impuestos que conlleva las criptomonedas. Nuestro equipo tiene un conocimiento profundo y una amplia experiencia en la contabilidad y en la fiscalidad de los activos criptográficos.</p>
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div id="tradingview_ac76e"></div>
    <div class="tradingview-widget-copyright"><a href="https://es.tradingview.com/symbols/BTCUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">BTCUSDT Gráfico</span></a> por TradingView</div>
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
    new TradingView.widget(
    {
    "width": 980,
    "height": 610,
    "symbol": "BINANCE:BTCUSDT",
    "interval": "D",
    "timezone": "Etc/UTC",
    "theme": "light",
    "style": "1",
    "locale": "es",
    "toolbar_bg": "#f1f3f6",
    "enable_publishing": false,
    "allow_symbol_change": true,
    "container_id": "tradingview_ac76e"
  }
    );
    </script>
  </div>
  <!-- TradingView Widget END -->

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div id="tradingview_30889"></div>
    <div class="tradingview-widget-copyright"><a href="https://es.tradingview.com/symbols/ETHUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">ETHUSDT Gráfico</span></a> por TradingView</div>
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
    new TradingView.widget(
    {
    "width": 980,
    "height": 610,
    "symbol": "BINANCE:ETHUSDT",
    "interval": "D",
    "timezone": "Etc/UTC",
    "theme": "light",
    "style": "1",
    "locale": "es",
    "toolbar_bg": "#f1f3f6",
    "enable_publishing": false,
    "allow_symbol_change": true,
    "container_id": "tradingview_30889"
  }
    );
    </script>
  </div>
  <!-- TradingView Widget END -->
@endsection
