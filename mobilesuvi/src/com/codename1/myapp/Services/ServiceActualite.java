/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.myapp.Services;


import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionListener;
import com.codename1.myapp.entities.Actualite;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author sahra
 */

public class ServiceActualite {
     public ArrayList<Actualite> actualites;
    public static ServiceActualite instance ; 
    public boolean resultOK;
    private  ConnectionRequest req; 
 public static final String BASE_URL="http://127.0.0.1:8000/actualite";
 private ServiceActualite() {
        req = new ConnectionRequest() ; 
         }
    
    public static ServiceActualite getInstance() {
        if (instance == null)
        {
            instance = new ServiceActualite();
        }
         return instance;
    }
 
 public ArrayList<Actualite> parseActualites(String jsonText){
        try {
            actualites= new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> ActualiteListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
           List< Map<String,Object>> list =(List< Map<String,Object>>) ActualiteListJson.get("root");
           for ( Map<String,Object> obj: list){
             Actualite p = new Actualite();
             float id = Float.parseFloat(obj.get("idActualite").toString());
             p.setTitreActualite(obj.get("titreActualite").toString());
             p.setIdActualite((int)id);
             p.setEtendu(obj.get("etendu").toString());
             p.setDescription(obj.get("description").toString());
             p.setImageAct(obj.get("imageAct").toString());
             
             
             actualites.add(p);
         
        } }
           catch (IOException ex) {
//            Logger.getLogger(ServiceOeuvre.class.getName()).log(Level.SEVERE, null, ex);
             
        }
          return actualites;
 }
     public ArrayList<Actualite> getAllOeuvres(){
          String url = BASE_URL+"/actt/AllActualite";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                actualites = parseActualites(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return actualites;
    }
        public void Supprimer(int id) {
        ConnectionRequest con = new ConnectionRequest();
        con.setUrl(BASE_URL+"/deleteActualitejson/"+id);
        con.setPost(false);
        con.addResponseListener((evt) -> {
            System.out.println(con.getResponseData());

        });
        NetworkManager.getInstance().addToQueueAndWait(con);

    }
       public boolean addAct (TextField titreActualite,TextField description,TextField etendu,TextField imageAct)
    { 

       String url = BASE_URL+"/AddActualitejson/new?titreActualite="+titreActualite.getText()+"&description="+description.getText()+"&etendu="+etendu.getText()+"&imageAct="+imageAct.getText();
       req.setUrl(url);
       req.addResponseListener(new ActionListener<NetworkEvent>(){ 
           @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
             }
    });
        System.out.println(""+resultOK);
       NetworkManager.getInstance().addToQueue(req);
        return resultOK;
    }
           public boolean updateAct (TextField titreActualite,TextField description,TextField etendu,TextField imageAct,int idActualite)
    { 

       String url = BASE_URL+"/UpdateActualitejson/"+idActualite+"/edit?titreActualite="+titreActualite.getText()+"&description="+description.getText()+"&etendu="+etendu.getText()+"&imageAct="+imageAct.getText();
       req.setUrl(url);
       req.addResponseListener(new ActionListener<NetworkEvent>(){ 
           @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
             }
    });
        System.out.println(""+resultOK);
       NetworkManager.getInstance().addToQueue(req);
        return resultOK;
    }
}
