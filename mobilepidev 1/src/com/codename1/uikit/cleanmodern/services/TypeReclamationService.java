/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Dialog;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.util.Resources;

import com.codename1.uikit.cleanmodern.entities.*;
import com.codename1.uikit.cleanmodern.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author raoun
 */
public class TypeReclamationService {
        
    public ArrayList<TypeReclamation> typereclamations;
    public static TypeReclamationService instance = null;
    private ConnectionRequest req;
     Resources res;
     
      public static boolean resultOk = true;
     
    public static TypeReclamationService getInstance() {
        if (instance == null) {
            instance = new TypeReclamationService();
        }
        return instance;

    }

    public TypeReclamationService() {
        req = new ConnectionRequest();
    }
    
        public ArrayList<TypeReclamation> parseTasks(String jsonText){
        try {
            typereclamations=new ArrayList<>();
            JSONParser j = new JSONParser();// Instanciation d'un objet JSONParser permettant le parsing du résultat json

            /*
                On doit convertir notre réponse texte en CharArray à fin de
            permettre au JSONParser de la lire et la manipuler d'ou vient 
            l'utilité de new CharArrayReader(json.toCharArray())
            
            La méthode parse json retourne une MAP<String,Object> ou String est 
            la clé principale de notre résultat.
            Dans notre cas la clé principale n'est pas définie cela ne veux pas
            dire qu'elle est manquante mais plutôt gardée à la valeur par defaut
            qui est root.
            En fait c'est la clé de l'objet qui englobe la totalité des objets 
                    c'est la clé définissant le tableau de tâches.
            */
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
              /* Ici on récupère l'objet contenant notre liste dans une liste 
            d'objets json List<MAP<String,Object>> ou chaque Map est une tâche.               
            
            Le format Json impose que l'objet soit définit sous forme
            de clé valeur avec la valeur elle même peut être un objet Json.
            Pour cela on utilise la structure Map comme elle est la structure la
            plus adéquate en Java pour stocker des couples Key/Value.
            
            Pour le cas d'un tableau (Json Array) contenant plusieurs objets
            sa valeur est une liste d'objets Json, donc une liste de Map
            */
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            
     
            
            
        } catch (IOException ex) {
            
        }
         /*
            A ce niveau on a pu récupérer une liste des tâches à partir
        de la base de données à travers un service web
        
        */
        return typereclamations;
    }
    
    
    public ArrayList<TypeReclamation> getAll(){
        String url = Statics.BASE_URL+"type/list";
       
        
       ArrayList<TypeReclamation> result = new ArrayList<>();
        
        
        req.setUrl(url);
        req.setPost(false);
        
        
         req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser jsonp;
                jsonp = new JSONParser();

                try {

                    Map<String, Object> mapReclamations = jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> listOfMaps = (List<Map<String, Object>>) mapReclamations.get("typereclamation");
                   System.out.println("lissst"+mapReclamations);
                    for(Map<String, Object> obj : listOfMaps) {
                        TypeReclamation re = new TypeReclamation();

                        String niveau = obj.get("niveau").toString();
                        //String niveau =obj.get("niveau").toString();
                            
                             // float nbpts = Float.parseFloat(obj.get("nbpts").toString());
                              float id = Float.parseFloat(obj.get("id").toString());
                     re.setId((int)id);
                     re.setNiveau(niveau);
                    // re.setNiveau(niveau);
                   
                    
                     result.add(re);
                System.out.println("data "+obj.get("niveau").toString());
                    }
                } catch (Exception ex) {
                    ex.printStackTrace();
                }
                
             }

        });
        
        NetworkManager.getInstance().addToQueueAndWait(req);
        
        
        return result;
    }
    
   public boolean deleteReclamation(int id ) {
        String url = Statics.BASE_URL +"reclamation/delete?id="+id;
        
        req.setUrl(url);
        
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                    
                    req.removeResponseCodeListener(this);
            }
        });
        
        NetworkManager.getInstance().addToQueueAndWait(req);
        return  resultOk;
    }
   
    public boolean modifierReclamation(Reclamation r) {
        String url = Statics.BASE_URL +"modifier/reclamation/"+r.getId()+"?sujet="+r.getSujetReclamation()+"&niveau="+r.getNiveau();
        req.setUrl(url);
        
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOk = req.getResponseCode() == 200 ;  // Code response Http 200 ok
                req.removeResponseListener(this);
            }
        });
        
    NetworkManager.getInstance().addToQueueAndWait(req);//execution ta3 request sinon yet3ada chy dima nal9awha
    return resultOk;
        
    }
    
   
      public boolean addType(TypeReclamation u)  {
        String url = Statics.BASE_URL + "AddType/json?niveau=" + u.getNiveau();
         
      req.setUrl(url);
        
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOk = req.getResponseCode() == 200 ;  // Code response Http 200 ok
                req.removeResponseListener(this);
            }
        });
        
    NetworkManager.getInstance().addToQueueAndWait(req);//execution ta3 request sinon yet3ada chy dima nal9awha
    return resultOk;
        
   
    }
      
      
       public ArrayList<Reclamation> getAllReclamations(TypeReclamation p){
        String url = Statics.BASE_URL+"AllReclamation/type/json?id="+p.getId();
       
        
       ArrayList<Reclamation> result = new ArrayList<>();
        
        
        req.setUrl(url);
        req.setPost(false);
        
        
         req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser jsonp;
                jsonp = new JSONParser();

                try {

                    Map<String, Object> mapReclamations = jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> listOfMaps = (List<Map<String, Object>>) mapReclamations.get("reclamation");
                   System.out.println("lissst"+mapReclamations);
                    for(Map<String, Object> obj : listOfMaps) {
                        Reclamation re = new Reclamation();

                        String sujet = obj.get("sujetRec").toString();
                        String niveau =obj.get("niveau").toString();
                         
                            
                              
                     float id = Float.parseFloat(obj.get("id").toString());
                     re.setId((int)id);
                     re.setNiveau(niveau);
                     re.setSujetReclamation(sujet);
                     re.setType(p);
                     result.add(re);
                System.out.println("data "+obj.get("sujetRec").toString());
                    }
                } catch (Exception ex) {
                    ex.printStackTrace();
                }
                
             }

        });
        
        
        NetworkManager.getInstance().addToQueueAndWait(req);
        return result;
    }
          
    
}
