<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta de Venta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        .header {
            text-align: center;
            padding: 10px 0;
            border-bottom: 2px solid #333;
            margin-bottom: 20px;
        }
        .header h2 {
            margin: 0;
            font-size: 24px;
        }
        .header p {
            margin: 5px 0;
            font-size: 14px;
        }
        .details, .items {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
            background: #fff;
        }
        .details td, .items th, .items td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .details td {
            font-size: 14px;
        }
        .items th {
            background-color: #333;
            color: #fff;
            font-size: 14px;
            text-align: center;
        }
        .items td {
            font-size: 13px;
            text-align: center;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #555;
        }
        .logo {
            text-align: left;
            margin-bottom: 20px;
        }
        .logo img {
            max-height: 100px;
        }
        .ruc {
            text-align: right;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .contact {
            text-align: center;
            font-size: 12px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="/images/logo/logo.png" alt="THE JEPETO BIKE-STORE" style="max-height: 100px;">
    </div>
    <div class="ruc">
        <p><strong>RUC: 20401234567</strong></p>
        <p>BOLETA DE VENTA ELECTRÓNICA</p>
        <p><strong>N° {{ str_pad($sale->id, 8, '0', STR_PAD_LEFT) }}</strong></p>
    </div>
    <div class="header">
        <h2>THE JEPETO BIKE-STORE</h2>
        <p>Av. Ejemplo 123, Lima, Perú</p>
        <p>Teléfono: 0800-123-456 | ventas@tuempresa.com</p>
    </div>

    <table class="details">
        <tr>
            <td><strong>Vendedor:</strong> {{ $sale->user->name }}</td>
            <td><strong>Cliente:</strong> {{ $sale->customer->nombre }} {{ $sale->customer->apellido }}</td>
        </tr>
        <tr>
            <td><strong>Fecha:</strong> {{ $sale->created_at->format('d/m/Y') }}</td>
            <td><strong>Total:</strong> S/ {{ number_format($sale->total, 2) }}</td>
        </tr>
    </table>

    <table class="items">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $sale->byke->nombre }}</td>
                <td>{{ $sale->cantidad }}</td>
                <td>S/ {{ number_format($sale->precio_unitario, 2) }}</td>
                <td>S/ {{ number_format($sale->total, 2) }}</td>
            </tr>
        </tbody>
    </table>

    <div class="footer">
        <p><strong>Gracias por su compra.</strong></p>
        <p>Esta boleta de venta electrónica cumple con los requisitos de SUNAT.</p>
        <p>Por favor conserve este comprobante para futuras referencias.</p>
    </div>

    <div class="contact">
        <p><strong>Atención al cliente:</strong> 0800-123-456</p>
        <p><strong>Email:</strong> ventas@tuempresa.com</p>
    </div>
</body>
</html>
