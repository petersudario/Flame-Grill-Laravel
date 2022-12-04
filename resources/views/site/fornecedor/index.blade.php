<!DOCTYPE html>
<html lang="ptBR">
    <body style="width: 400px; padding:40px"> 
        <h1>Fornecedores</h1>

        @if(sizeof($fornecedores) > 0)
            @for($i= 0; isset($fornecedores[$i]); $i++)
                Fornecedor: {{ $fornecedores[$i]['nome'] }}   
                <br>
                Status:
                @if ($fornecedores[$i]['status'] == 'S')
                    Ativo
                @endif
                @unless ($fornecedores[$i]['status'] == 'S')
                    Inativo
                @endunless
                <br>
                @isset($fornecedores[$i]['CPF'])
                    CPF: {{ $fornecedores[$i]['CPF'] }}
                    @empty($fornecedores[$i]['CPF'])
                        - Não informado
                    @endempty
                @endisset
                <br>
                CNPJ: {{ $fornecedores[$i]['CNPJ'] ?? 'Dado não preenchido' }}
                <br>
                Telefone: {{ $fornecedores[$i]['DDD'] ?? '' }} {{ $fornecedores[$i]['TEL'] }}

                @switch ($fornecedores[$i]['DDD'])
                    @case (41)
                        <br> Estado: Paraná
                        @break
                    @case (11)
                        <br> Estado: São Paulo
                        @break
                    @case (48)
                        <br> Estado: Santa Catarina
                        @break
                    @default
                        <br> Estado: Não identificado
                @endswitch
                <hr>
            @endfor
        @else
            Não existem fornecedores cadastrados.
        @endif
    </body>