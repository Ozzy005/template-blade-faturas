<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faturas</title>
    <style>
        .faturas {
            width: 21cm;
            height: 29.7cm;
            margin: auto;
        }

        .flex {
            display: flex;
        }

        .x-center {
            justify-content: center;
        }

        .x-end {
            justify-content: flex-end;
        }

        .y-center {
            align-items: center;
        }

        .center {
            justify-content: center;
            align-items: center;
        }

        .grid {
            display: grid;
        }

        .text-center {
            text-align: center;
        }

        /* START BORDER */
        .b-1 {
            border: 1px solid black;
        }

        .bt-1 {
            border-top: 1px solid black;
        }

        .br-1 {
            border-right: 1px solid black;
        }

        .bb-1 {
            border-bottom: 1px solid black;
        }

        .bl-1 {
            border-left: 1px solid black;
        }

        .bx-1 {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        .by-1 {
            border-right: 1px solid black;
            border-left: 1px solid black;
        }

        /* END BORDER */

        /* START WIDTH*/
        .w-20 {
            width: 20%;
        }

        .w-25 {
            width: 25%;
        }

        .w-50 {
            width: 50%;
        }

        .w-75 {
            width: 75%;
        }

        .w-80 {
            width: 80%;
        }

        .w-90 {
            width: 90%;
        }

        .w-95 {
            width: 95%;
        }

        .w-100 {
            width: 100%;
        }

        /* END WIDTH */

        /* START HEIGHT */
        .h-25 {
            height: 25%;
        }

        .h-50 {
            height: 50%;
        }

        .h-75 {
            height: 75%;
        }

        .h-100 {
            height: 100%;
        }

        /* END HEIGHT */

        /* START MARGIN */
        .m-1 {
            margin: 3px;
        }

        .mt-1 {
            margin-top: 3px;
        }

        .mr-1 {
            margin-right: 3px;
        }

        .mb-1 {
            margin-bottom: 3px;
        }

        .ml-1 {
            margin-left: 3px;
        }

        .mx-1 {
            margin-top: 3px;
            margin-bottom: 3px;
        }

        .my-1 {
            margin-right: 3px;
            margin-left: 3px;
        }

        .m-2 {
            margin: 6px;
        }

        .mt-2 {
            margin-top: 6px;
        }

        .mr-2 {
            margin-right: 6px;
        }

        .mb-2 {
            margin-bottom: 6px;
        }

        .ml-2 {
            margin-left: 6px;
        }

        .mx-2 {
            margin-top: 6px;
            margin-bottom: 6px;
        }

        .my-2 {
            margin-right: 6px;
            margin-left: 6px;
        }

        .m-3 {
            margin: 9px;
        }

        .mt-3 {
            margin-top: 9px;
        }

        .mr-3 {
            margin-right: 9px;
        }

        .mb-3 {
            margin-bottom: 9px;
        }

        .ml-3 {
            margin-left: 9px;
        }

        .mx-3 {
            margin-top: 9px;
            margin-bottom: 9px;
        }

        .my-3 {
            margin-right: 9px;
            margin-left: 9px;
        }

        /* END MARGIN */

        .faturas {
            grid-template-rows: auto 2cm auto 1.5cm min-content 1.5cm auto 2cm auto;
        }

        .l1 {
            grid-template-columns: repeat(2, 1fr);
        }

        .l1-c1,
        .l1-c2,
        .l1-c2-l2,
        .l3,
        .l7,
        .l8,
        .l9 {
            grid-auto-rows: auto;
        }

        .l4 {
            grid-template-columns: repeat(5, 1fr);
        }

        .l5 {
            grid-auto-rows: 1.5cm;
        }

        .l5-l1 {
            grid-template-columns: repeat(5, 1fr);
        }

        .l6 {
            grid-template-columns: 4fr 1fr;
        }

        .img {
            max-width: 10cm;
            max-height: 2cm;
        }
    </style>
</head>

<body>
    @foreach ($invoicings as $invoicing)
    <div class="faturas grid b-1 mb-3">
        <div class="l1 grid bb-1">
            <div class="l1-c1 grid br-1">
                <div class="flex center text-center">
                    <img src="{{!empty($invoicing->company->image)
                    ? asset("storage/{$invoicing->company->image}")
                    : asset('img/noimage.png')}}" class="img">
                </div>
                @if (!empty($invoicing->company->name))
                <div class="flex center">
                    <b class="w-95 text-center flex center">
                        {{ $invoicing->company->name }}
                    </b>
                </div>
                @endif
                @if (!empty($invoicing->company->address))
                <div class="flex center">
                    <span class="w-95 text-center flex center">
                        {{ $invoicing->company->address }}
                    </span>
                </div>
                @endif
                @if (!empty($invoicing->company->district))
                <div class="flex center">
                    <span class="w-95 text-center flex center">
                        {{ $invoicing->company->district }},
                        {{ $invoicing->company->number ?? 'S/N'}}
                    </span>
                </div>
                @endif
                @if (!empty($invoicing->company->zip_code))
                <div class="flex center">
                    <span class="w-95 text-center flex center">
                        <span class="mr-1">CEP:</span>
                        {{ $invoicing->company->zip_code }},
                        {{ $invoicing->company->city ?? '' }}
                    </span>
                </div>
                @endif
            </div>
            <div class="l1-c2 grid bb">
                <div class="l1-c2-l1 flex center">
                    <b>FATURA: {{ $invoicing->invoice }}</b>
                </div>
                <div class="l1-c2-l2 grid bx-1">
                    <div class="flex y-center">
                        <span class="ml-1">
                            <b class="mr-1">CNPJ:</b>
                            {{ $invoicing->company->nif ?? 'Não informado' }}
                        </span>
                    </div>
                    <div class="flex y-center">
                        <span class="ml-1">
                            <b class="mr-1">Insc. Estadual:</b>
                            {{ $invoicing->company->state_registration ?? 'Não informado' }}
                        </span>
                    </div>
                    <div class="flex y-center">
                        <span class="ml-1">
                            <b class="mr-1">Insc. Municipal:</b>
                            {{ $invoicing->company->city_registration ?? 'Não informado' }}
                        </span>
                    </div>
                    <div class="flex y-center">
                        <span class="ml-1">
                            <b class="mr-1">Operação:</b>
                            {{ $invoicing->company->operation ?? 'Não informado' }}
                        </span>
                    </div>
                </div>
                <div class="l1-c2-l1 flex y-center">
                    <span class="ml-1">
                        <b class="mr-1">Emissão:</b>
                        {{ $invoicing->dt_generation ? brDate($invoicing->dt_generation) : 'Não informado' }}
                    </span>
                </div>
            </div>
        </div>
        <div class="l2 flex center bb-1">
            <b>CLIENTE FATURAMENTO</b>
        </div>
        <div class="l3 grid bb-1">
            <div class="flex y-center">
                <span class="ml-1">
                    <b class="mr1">Razão Social/Nome Fantasia:</b>
                    {{ $invoicing->client->name ?? 'Não informado' }}
                </span>
            </div>
            <div class="flex y-center">
                <span class="ml-1">
                    <b class="mr1">CNPJ/CPF:</b>
                    {{ $invoicing->client->nif ?? 'Não informado' }}
                </span>
            </div>
            <div class="flex y-center">
                <span class="ml-1">
                    <b class="mr-1">Endereço:</b>
                    {{ $invoicing->client->address ?? 'Não informado' }}
                </span>
            </div>
            <div class="flex y-center">
                <span class="ml-1">
                    <b class="mr-1">CEP:</b>
                    {{ $invoicing->client->zip_code ?? 'Não informado' }}
                    <b class="mr-1">Cidade/UF:</b>
                    {{ $invoicing->client->city ?? 'Não informado' }}
                </span>
            </div>
            <div class="flex y-center">
                <span class="ml-1">
                    <b class="mr-1">Tipo de Faturamento:</b>
                    {{ $invoicing->invoicingType() ?? 'Não informado' }}
                </span>
            </div>
            <div class="flex y-center">
                <span class="ml-1">
                    <b class="mr-1">Forma de Pagamento:</b>
                    {{ $invoicing->paymentMethod->description ?? 'Não informado' }}
                </span>
            </div>
            <div class="flex y-center">
                <span class="ml-1">
                    <b class="mr-1">Data de Vencimento:</b>
                    {{ $invoicing->due_date ? brDate($invoicing->due_date) : 'Não informado' }}
                </span>
            </div>
        </div>
        <div class="l4 grid bb-1">
            <div class="flex center br-1"><b>Descrição</b></div>
            <div class="flex center br-1"><b>Unid.</b></div>
            <div class="flex center br-1"><b>Qtde.</b></div>
            <div class="flex center br-1"><b>Vl. Unit.</b></div>
            <div class="flex center"><b>Vl. Total</b></div>
        </div>
        <div class="l5 grid">
            @foreach ($invoicing->invoicingItems as $item)
            <div class="l5-l1 grid bb-1">
                <div class="flex center x-start br-1">
                    <span class="">
                        {{$item->product->commercial_name}}
                    </span>
                </div>
                <div class="flex center x-start br-1">
                    <span class="">
                        {{$item->product->measurement->name}}
                    </span>
                </div>
                <div class="flex y-center x-end br-1">
                    <span class="mr-1">
                        R${{money($item->invoice_quantity)}}
                    </span>
                </div>
                <div class="flex y-center x-end br-1">
                    <span class="mr-1">
                        R${{money($item->vl_unit)}}
                    </span>
                </div>
                <div class="flex y-center x-end">
                    <span class="mr-1">
                        R${{money($item->total_amount)}}
                    </span>
                </div>
            </div>
            @endforeach
        </div>
        <div class="l6 grid bb-1">
            <div class="flex y-center x-end br-1">
                <b class="mr-1">Valor Final</b>
            </div>
            <div class="flex y-center x-end">
                <b class="mr-1">R${{money($invoicing->invoicingItems->sum('total_amount'))}}</b>
            </div>
        </div>
        <div class="l7 grid bb-1">
            <div class="flex y-center">
                <b class="ml-1">Informações Complementares:</b>
            </div>
            <div class="flex y-center">
                <span class="ml-1">
                    Ref. Contrato: {{$invoicing->contract}}.
                </span>
            </div>
            <div class="flex y-center">
                <b class="ml-1">Dados para pagamento:</b>
            </div>
            <div class="flex y-center">
                <span class="ml-1">
                    {{ $invoicing->company->name ?? 'Não informado' }}
                </span>
            </div>
            <div class="flex y-center">
                <span class="ml-1">
                    @if ($invoicing->invoicing_type == 1 || $invoicing->invoicing_type == 2 )
                    <b>PIX:</b>
                    {{ $invoicing->company->pix ?? 'Não informado' }}
                    @else
                    Ver boleto
                    @endif
                </span>
            </div>
        </div>
        <div class="l8 flex center bb-1">
            <b>OBSERVAÇÕES</b>
        </div>
        <div class="l9 grid">
            <div class="flex y-center">
                <span class="ml-1">
                    {{ $invoicing->note ?? 'Sem observações' }}
                </span>
            </div>
        </div>
    </div>
    @endforeach
</body>

</html>