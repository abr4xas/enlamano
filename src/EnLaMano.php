<?php

namespace Abr4xas\EnLaMano;

use App\Exceptions\EnLaManoExceptions\EnlaManoException;
use Illuminate\Support\Facades\Http;

class EnLaMano
{
    protected $baseUri;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->baseUri = config('enlamano.base_uri');
        $this->user = config('enlamano.user');
        $this->password = config('enlamano.password');
    }

    /**
     * Undocumented function
     *
     * @param array $params
     * @return array
     * @throw \App\Exceptions\EnLaManoExceptions\EnlaManoException
     */
    public function makeExternalRequest(array $params): array
    {
        $request = Http::withBasicAuth($this->user, $this->password)
            ->withHeaders([
                'Content-Type' => 'application/json',
            ])->post($this->baseUri, [
                'Documento' => $params['document'] ?: '',
                'TipoDocumento' => $params['document_type'] ?: '',
                'DatosEntrada' => [
                    'Salario' => $params['salary'] ?: '',
                    'Sexo' => $params['gender'] ?: '',
                    'Region' => $params['region'] ?: '',
                    'Edad' => $params['age'] ?: '',
                ],
            ]);

        switch ($request->status()) {
            case 200:
                return $request->json();

                break;
            case 401:
                throw new EnlaManoException('Error de credenciales en el web service', 401);

                break;
            case 403:
                throw new EnlaManoException('Request rechazado por temas de seguridad en el web service', 403);

                break;
            case 500:
                throw new EnlaManoException('Hay un error en el servidor del web service, no se pudo procesar la transacción', 500);

                break;
            case 500:
                throw new EnlaManoException('El servidor del web service no responde', 500);

                break;
            default:
                throw new EnlaManoException('Hay un error no determinado con el servidor del web service');

                break;
        }
    }
}
