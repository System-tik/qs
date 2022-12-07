<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\compte;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiControllerCompte extends Controller
{
    //
    public function store(Request $request)
    {
        try {
            //validation des éléments request
            $rules = [
                'noms' => 'required|min:4|max:50',
                'tel' => 'required|min:10|max:14',
                'email' => 'required|email',
                'mdp' => 'required'
            ];
            $validate = Validator::make($request->all(), $rules, $messages = [
                'noms.required' => 'Veuillez rensigner le nom.',
                'noms.min' => 'le nom doit contenir plus de 4 caractères.',
                'noms.max' => 'le nom ne doit contenir plus de 50 caractères.',

                'tel.required' => 'Veuillez saisir le numéro.',
                'tel.min' => 'Veuillez vérifier que le numéro est valide.',
                'tel.max' => 'Veuillez vérifier que le numéro est valide.',
        
                'email.email' => 'Adresse email incorrecte.',
                'email.required' => 'Veuillez saisir l\'addresse email.',
                'mdp.required' => 'Veuiller saisir le mot de passe.'

            ]);
            if($validate->fails()){
                return response()->json($validate->errors(), 400);
            }
            $compte_exist = compte::where('tel', $request->tel)->orWhere('email', $request->email)->first();
            if($compte_exist === null){
                $reque = compte::create([
                    'noms' => $request->noms,
                    'tel' => $request->tel,
                    'email' => $request->email,
                    'mdp' => Hash::make($request->mdp) 
                ]);
                return response()->json($reque, 200);
            }
            return response()->json(["message" => "duplicate"], 400);
            //creation d'un compte
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            //validation des éléments request
            $rules = [
                'noms' => 'required',
                'tel' => 'required|min:10|max:14',
                'email' => 'required|email',
                'mdp' => 'required|min:3|max:25'
            ];
            $validate = Validator::make($request->all(), $rules, $messages = [
                'noms.required' => 'Veuillez rensigner le nom.',
                'noms.min' => 'le nom doit contenir plus de 4 caractères.',
                'noms.max' => 'le nom ne doit contenir plus de 25 caractères.',

                'tel.required' => 'Veuillez saisir le numéro.',
                'tel.min' => 'Veuillez vérifier que le numéro est valide.',
                'tel.max' => 'Veuillez vérifier que le numéro est valide.',
        
                'email.email' => 'Adresse email incorrecte.',
                'email.required' => 'Veuillez saisir l\'addresse email.',
                'mdp.required' => 'Veuiller saisir le mot de passe.'

            ]);

            if($validate->fails()){
                return response()->json($validate->errors(), 400);
            }
            //modification du compte
            compte::findOrfail($id)->update([
                'noms' => $request->noms,
                'tel' => $request->tel,
                'email' => $request->email,
                'mdp' => $request->mdp
            ]);
            return response()->json(['message' => 'Modification effectuée'], 200);
            
        } catch (Exception $e) {
            return response()->json(['message' => 'Une erreur est survenue'], 400);
        }
    }

    public function delete(Request $request, $id)
    {
        try {
            //suppression du compte
            compte::findOrfail($id)->delete();
            return response()->json(['message' => 'Suppression effectuée'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Une erreur est survenue'], 400);
        }
    }

    public function login(Request $request)
    {
        try {
                $user = compte::where('tel',$request->tel)->first();
                if(Hash::check($request->mdp, $user->mdp)){
                    return response()->json($user, 200);
                } else {
                return response()->json(['message' => 'Echec de la connexion'], 400);
            }
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}
