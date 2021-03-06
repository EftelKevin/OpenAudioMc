package me.mindgamesnl.openaudiomc.detectors;

public class checkDependencies {
	
	
	public static Boolean dependenciesComplete;
	
	
	public static void runCheck() {
		
		if (me.mindgamesnl.openaudiomc.main.Main.getPL().getServer().getPluginManager().isPluginEnabled("WorldGuard") == true && me.mindgamesnl.openaudiomc.main.Main.getPL().getServer().getPluginManager().isPluginEnabled("WorldEdit") == true && me.mindgamesnl.openaudiomc.main.Main.getPL().getServer().getPluginManager().isPluginEnabled("WGRegionEvents") == true) {
			
			System.out.println("[OpenAudio] All dependencies are detected, regions will be enabled!");
			dependenciesComplete = true;
			
		} else {
			
			System.out.println("[OpenAudio] Not all dependencies are installed, all the region functions will NOT work! please install WorldEdit, WorldGuard and WgRegionEvents");
			dependenciesComplete = false;
			
		}
		
	}
	
	public static boolean getStatus() {
		return dependenciesComplete;
	}
	
}
