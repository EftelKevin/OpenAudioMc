package me.mindgamesnl.openaudiomc.apiConnector;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.URL;


public class ApiFunctions {

	
	//scan a port
	public static String getWsPort() throws Exception {
	    URL url = new URL("http://api.craftmend.com/openaudio/port.php");
	    BufferedReader in = new BufferedReader(new InputStreamReader(url.openStream()));
	    String str;
	    while ((str = in.readLine()) != null) {
	      return str; 
	    }
	    in.close();
		return str;
	 }
	
	
	//get api
	public static String getWsAdress() throws Exception {
	    URL url = new URL("http://checkip.amazonaws.com/");
	    BufferedReader in = new BufferedReader(new InputStreamReader(url.openStream()));
	    String str;
	    while ((str = in.readLine()) != null) {
	      return str; 
	    }
	    in.close();
		return str;
	  }	
	
	
}
