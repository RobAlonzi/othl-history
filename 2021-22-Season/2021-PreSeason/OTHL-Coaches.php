<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Coaches</title>
<script src="OTHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.2.7.8 - OTHL-STHS.db - OTHL-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"OTHL-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"OTHL-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<h1 class="STHSCoaches_ProCoaches">Pro Coaches</h1>
<script>jQuery(function($,undefined) {$.basictablesorter.addParser({id: 'thousands',is: function(s) {return false;}, format: function(s) { return s.replace('$','').replace(/,/g,'');}, type: 'numeric' }); $("table").basictablesorter({headers:{11:{sorter:'thousands'}}});});</script>
<table class="basictablesorter"><thead><tr><th class="STHSW200"><b>Coaches Name</b></th>
<th class="STHSW25">PH</th><th class="STHSW25">DF</th><th class="STHSW25">OF</th><th class="STHSW25">PD</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW35">CNT</th><th class="STHSW35">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th></tr></thead>
<tr><td>Alain Vigneault (NYR)</td><td>81</td><td>83</td><td>86</td><td>84</td><td>89</td><td>83</td><td>57</td><td>CAN</td><td>59</td><td>1 years</td><td>$5,000,000</td></tr>
<tr><td>Andre Tourigny (OTT)</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>CAN</td><td>47</td><td>5 years</td><td>$1,500,000</td></tr>
<tr><td>Barry Trotz (EDM)</td><td>86</td><td>92</td><td>83</td><td>93</td><td>87</td><td>81</td><td>59</td><td>CAN</td><td>58</td><td>3 years</td><td>$5,000,000</td></tr>
<tr><td>Bill Peters (ANH)</td><td>71</td><td>77</td><td>76</td><td>75</td><td>84</td><td>78</td><td>63</td><td>CAN</td><td>56</td><td>2 years</td><td>$4,000,000</td></tr>
<tr><td>Bruce Boudreau (LAK)</td><td>70</td><td>76</td><td>80</td><td>77</td><td>99</td><td>92</td><td>43</td><td>CAN</td><td>66</td><td>1 years</td><td>$3,500,000</td></tr>
<tr><td>Bruce Cassidy (MIN)</td><td>84</td><td>95</td><td>87</td><td>80</td><td>83</td><td>77</td><td>65</td><td>CAN</td><td>55</td><td>2 years</td><td>$3,750,000</td></tr>
<tr><td>Claude Julien (CGY)</td><td>85</td><td>83</td><td>79</td><td>81</td><td>90</td><td>84</td><td>55</td><td>CAN</td><td>60</td><td>1 years</td><td>$5,000,000</td></tr>
<tr><td>Craig Berube (CHI)</td><td>81</td><td>89</td><td>86</td><td>85</td><td>83</td><td>77</td><td>65</td><td>CAN</td><td>55</td><td>1 years</td><td>$2,500,000</td></tr>
<tr><td>Dave Tippett (CLB)</td><td>83</td><td>88</td><td>89</td><td>84</td><td>89</td><td>83</td><td>57</td><td>CAN</td><td>59</td><td>3 years</td><td>$3,000,000</td></tr>
<tr><td>David Quinn (PHL)</td><td>79</td><td>84</td><td>86</td><td>74</td><td>81</td><td>76</td><td>67</td><td>USA</td><td>54</td><td>2 years</td><td>$3,150,000</td></tr>
<tr><td>Dean Evason (SEA)</td><td>82</td><td>86</td><td>88</td><td>83</td><td>84</td><td>78</td><td>63</td><td>CAN</td><td>56</td><td>3 years</td><td>$2,000,000</td></tr>
<tr><td>Geoff Ward (PIT)</td><td>77</td><td>84</td><td>79</td><td>81</td><td>89</td><td>83</td><td>57</td><td>CAN</td><td>59</td><td>3 years</td><td>$950,000</td></tr>
<tr><td>Gerald Gallant (DAL)</td><td>97</td><td>85</td><td>80</td><td>93</td><td>79</td><td>67</td><td>84</td><td>CAN</td><td>54</td><td>1 years</td><td>$3,250,000</td></tr>
<tr><td>Guy Boucher (DET)</td><td>63</td><td>45</td><td>65</td><td>65</td><td>73</td><td>60</td><td>62</td><td>CAN</td><td>49</td><td>2 years</td><td>$1,500,000</td></tr>
<tr><td>Jared Bednar (MTL)</td><td>80</td><td>93</td><td>92</td><td>82</td><td>74</td><td>69</td><td>76</td><td>CAN</td><td>49</td><td>4 years</td><td>$3,000,000</td></tr>
<tr><td>Joel Quenneville (TOR)</td><td>81</td><td>86</td><td>91</td><td>82</td><td>93</td><td>87</td><td>51</td><td>CAN</td><td>62</td><td>4 years</td><td>$5,000,000</td></tr>
<tr><td>John Tortorella (FLA)</td><td>81</td><td>87</td><td>77</td><td>88</td><td>93</td><td>87</td><td>51</td><td>USA</td><td>62</td><td>4 years</td><td>$4,000,000</td></tr>
<tr><td>Jon Cooper (NSH)</td><td>83</td><td>91</td><td>90</td><td>81</td><td>80</td><td>74</td><td>69</td><td>CAN</td><td>53</td><td>5 years</td><td>$8,000,000</td></tr>
<tr><td>Ken Hitchcock (COL)</td><td>94</td><td>64</td><td>72</td><td>63</td><td>99</td><td>97</td><td>82</td><td>CAN</td><td>65</td><td>2 years</td><td>$1,500,000</td></tr>
<tr><td>Marc Crawford (TBL)</td><td>65</td><td>70</td><td>67</td><td>71</td><td>90</td><td>84</td><td>55</td><td>CAN</td><td>60</td><td>2 years</td><td>$1,750,000</td></tr>
<tr><td>Mike Babcock (WSH)</td><td>70</td><td>75</td><td>84</td><td>81</td><td>86</td><td>80</td><td>61</td><td>CAN</td><td>57</td><td>2 years</td><td>$6,000,000</td></tr>
<tr><td>Mike Sullivan (ARI)</td><td>85</td><td>89</td><td>90</td><td>86</td><td>80</td><td>74</td><td>69</td><td>USA</td><td>53</td><td>3 years</td><td>$5,000,000</td></tr>
<tr><td>Paul Maurice (BOS)</td><td>82</td><td>89</td><td>85</td><td>86</td><td>81</td><td>76</td><td>67</td><td>CAN</td><td>54</td><td>2 years</td><td>$4,000,000</td></tr>
<tr><td>Peter DeBoer (NYI)</td><td>83</td><td>90</td><td>87</td><td>84</td><td>78</td><td>73</td><td>71</td><td>CAN</td><td>52</td><td>3 years</td><td>$5,500,000</td></tr>
<tr><td>Peter Laviolette (VGK)</td><td>80</td><td>83</td><td>86</td><td>80</td><td>84</td><td>78</td><td>63</td><td>USA</td><td>56</td><td>2 years</td><td>$4,000,000</td></tr>
<tr><td>Rick Bowness (BUF)</td><td>83</td><td>92</td><td>81</td><td>87</td><td>99</td><td>92</td><td>43</td><td>CAN</td><td>66</td><td>3 years</td><td>$1,000,000</td></tr>
<tr><td>Rick Tocchet (SJS)</td><td>83</td><td>88</td><td>80</td><td>87</td><td>86</td><td>80</td><td>61</td><td>CAN</td><td>57</td><td>1 years</td><td>$2,000,000</td></tr>
<tr><td>Rob Brind'Amour (STL)</td><td>90</td><td>91</td><td>77</td><td>90</td><td>66</td><td>64</td><td>80</td><td>CAN</td><td>47</td><td>3 years</td><td>$3,000,000</td></tr>
<tr><td>Sheldon Keefe (CAR)</td><td>82</td><td>87</td><td>91</td><td>88</td><td>60</td><td>56</td><td>85</td><td>CAN</td><td>40</td><td>2 years</td><td>$4,500,000</td></tr>
<tr><td>Todd Reirden (NJD)</td><td>76</td><td>79</td><td>84</td><td>74</td><td>74</td><td>69</td><td>76</td><td>USA</td><td>49</td><td>2 years</td><td>$3,000,000</td></tr>
<tr><td>Todd Richards (WPG)</td><td>67</td><td>74</td><td>71</td><td>63</td><td>81</td><td>76</td><td>67</td><td>USA</td><td>54</td><td>1 years</td><td>$950,000</td></tr>
<tr><td>Travis Green (VAN)</td><td>80</td><td>82</td><td>83</td><td>80</td><td>75</td><td>70</td><td>75</td><td>CAN</td><td>50</td><td>1 years</td><td>$1,750,000</td></tr>
</table>
<h1 class="STHSCoaches_FarmCoaches">Farm Coaches</h1>
<table class="basictablesorter"><thead><tr><th class="STHSW200"><b>Coaches Name</b></th>
<th class="STHSW25">PH</th><th class="STHSW25">DF</th><th class="STHSW25">OF</th><th class="STHSW25">PD</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW35">CNT</th><th class="STHSW35">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th></tr></thead>
<tr><td>Andrew Brewer (PRO)</td><td>44</td><td>56</td><td>71</td><td>74</td><td>45</td><td>46</td><td>56</td><td>CAN</td><td>35</td><td>1 years</td><td>$700,000</td></tr>
<tr><td>Chris Taylor (SPR)</td><td>60</td><td>66</td><td>64</td><td>73</td><td>74</td><td>69</td><td>76</td><td>CAN</td><td>49</td><td>2 years</td><td>$700,000</td></tr>
<tr><td>D.J. Smith (RCK)</td><td>88</td><td>80</td><td>82</td><td>81</td><td>65</td><td>60</td><td>82</td><td>CAN</td><td>43</td><td>3 years</td><td>$1,500,000</td></tr>
<tr><td>Dallas Eakins (HER)</td><td>82</td><td>83</td><td>77</td><td>79</td><td>81</td><td>76</td><td>67</td><td>USA</td><td>54</td><td>1 years</td><td>$800,000</td></tr>
<tr><td>Dan Bylsma (BKR)</td><td>64</td><td>61</td><td>65</td><td>70</td><td>75</td><td>70</td><td>75</td><td>USA</td><td>50</td><td>1 years</td><td>$600,000</td></tr>
<tr><td>Darryl Sydor (COL)</td><td>50</td><td>68</td><td>59</td><td>66</td><td>45</td><td>46</td><td>56</td><td>CAN</td><td>44</td><td>1 years</td><td>$600,000</td></tr>
<tr><td>Derek Lalonde (PSM)</td><td>63</td><td>73</td><td>75</td><td>64</td><td>72</td><td>67</td><td>77</td><td>USA</td><td>48</td><td>2 years</td><td>$2,000,000</td></tr>
<tr><td>Gerard Gallant (MIL)</td><td>80</td><td>79</td><td>80</td><td>77</td><td>87</td><td>81</td><td>59</td><td>CAN</td><td>58</td><td>3 years</td><td>$1,600,000</td></tr>
<tr><td>Jay Leach (WBS)</td><td>72</td><td>74</td><td>71</td><td>73</td><td>64</td><td>59</td><td>84</td><td>USA</td><td>41</td><td>1 years</td><td>$800,000</td></tr>
<tr><td>Jeff Blashill (LAV)</td><td>80</td><td>79</td><td>83</td><td>85</td><td>71</td><td>66</td><td>78</td><td>USA</td><td>47</td><td>5 years</td><td>$1,000,000</td></tr>
<tr><td>Jim Montgomery (CHI)</td><td>75</td><td>83</td><td>74</td><td>76</td><td>77</td><td>71</td><td>73</td><td>CAN</td><td>51</td><td>1 years</td><td>$800,000</td></tr>
<tr><td>Joel Bouchard (SAR)</td><td>72</td><td>70</td><td>71</td><td>74</td><td>73</td><td>68</td><td>78</td><td>CAN</td><td>47</td><td>1 years</td><td>$800,000</td></tr>
<tr><td>Kerry Huffman (IOA)</td><td>56</td><td>77</td><td>79</td><td>41</td><td>48</td><td>41</td><td>57</td><td>CAN</td><td>53</td><td>1 years</td><td>$800,000</td></tr>
<tr><td>Kirk Muller (TEX)</td><td>70</td><td>69</td><td>65</td><td>66</td><td>83</td><td>77</td><td>65</td><td>CAN</td><td>55</td><td>1 years</td><td>$700,000</td></tr>
<tr><td>Kris Knoblauch (CLE)</td><td>65</td><td>68</td><td>69</td><td>70</td><td>65</td><td>61</td><td>83</td><td>CAN</td><td>42</td><td>2 years</td><td>$700,000</td></tr>
<tr><td>Manny Malhotra (SDG)</td><td>62</td><td>71</td><td>73</td><td>67</td><td>60</td><td>56</td><td>85</td><td>CAN</td><td>40</td><td>2 years</td><td>$650,000</td></tr>
<tr><td>Mark Dennehy (CHR)</td><td>63</td><td>64</td><td>64</td><td>72</td><td>82</td><td>77</td><td>69</td><td>USA</td><td>53</td><td>1 years</td><td>$600,000</td></tr>
<tr><td>Mike Kelly (GRP)</td><td>73</td><td>64</td><td>60</td><td>70</td><td>45</td><td>46</td><td>60</td><td>CAN</td><td>59</td><td>2 years</td><td>$775,000</td></tr>
<tr><td>Mike Vellucci (UTI)</td><td>68</td><td>70</td><td>69</td><td>70</td><td>81</td><td>76</td><td>67</td><td>USA</td><td>54</td><td>2 years</td><td>$800,000</td></tr>
<tr><td>Nolan Pratt (BEL)</td><td>62</td><td>77</td><td>76</td><td>66</td><td>68</td><td>63</td><td>80</td><td>CAN</td><td>45</td><td>3 years</td><td>$700,000</td></tr>
<tr><td>Pascal Vincent (HFD)</td><td>67</td><td>68</td><td>66</td><td>69</td><td>76</td><td>71</td><td>76</td><td>CAN</td><td>49</td><td>2 years</td><td>$900,000</td></tr>
<tr><td>Phil Housley (TUC)</td><td>67</td><td>73</td><td>64</td><td>71</td><td>86</td><td>80</td><td>61</td><td>USA</td><td>57</td><td>1 years</td><td>$750,000</td></tr>
<tr><td>Rocky Thompson (TOR)</td><td>65</td><td>65</td><td>61</td><td>68</td><td>65</td><td>60</td><td>82</td><td>CAN</td><td>43</td><td>2 years</td><td>$750,000</td></tr>
<tr><td>Scott Arniel (ROC)</td><td>68</td><td>70</td><td>76</td><td>63</td><td>87</td><td>81</td><td>59</td><td>CAN</td><td>58</td><td>2 years</td><td>$900,000</td></tr>
<tr><td>Sheldon Brookbank (MAN)</td><td>67</td><td>66</td><td>68</td><td>71</td><td>60</td><td>56</td><td>85</td><td>CAN</td><td>40</td><td>3 years</td><td>$850,000</td></tr>
<tr><td>Spencer Carbery (ONT)</td><td>70</td><td>73</td><td>70</td><td>76</td><td>60</td><td>57</td><td>86</td><td>CAN</td><td>39</td><td>1 years</td><td>$700,000</td></tr>
<tr><td>Tim Army (LVP)</td><td>74</td><td>67</td><td>70</td><td>61</td><td>88</td><td>83</td><td>61</td><td>USA</td><td>57</td><td>3 years</td><td>$725,000</td></tr>
<tr><td>Trent Cull (ABB)</td><td>68</td><td>65</td><td>72</td><td>67</td><td>73</td><td>68</td><td>78</td><td>CAN</td><td>47</td><td>2 years</td><td>$750,000</td></tr>
<tr><td>Troy Mann (STK)</td><td>68</td><td>65</td><td>69</td><td>68</td><td>79</td><td>74</td><td>73</td><td>CAN</td><td>51</td><td>1 years</td><td>$700,000</td></tr>
</table>
<h1 class="STHSCoaches_AvailableCoaches">Available Coaches</h1>
<table class="basictablesorter"><thead><tr><th class="STHSW200"><b>Coaches Name</b></th>
<th class="STHSW25">PH</th><th class="STHSW25">DF</th><th class="STHSW25">OF</th><th class="STHSW25">PD</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">PO</th><th class="STHSW35">CNT</th><th class="STHSW35">Age</th><th class="STHSW25">Contract</th><th class="STHSW100">Salary</th></tr></thead>
<tr><td>A.J. MacLean</td><td>37</td><td>43</td><td>54</td><td>63</td><td>47</td><td>35</td><td>47</td><td>CAN</td><td>36</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Aaron Schneekloth</td><td>59</td><td>45</td><td>59</td><td>55</td><td>47</td><td>35</td><td>50</td><td>CAN</td><td>43</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Alain Nasreddine</td><td>70</td><td>71</td><td>70</td><td>75</td><td>68</td><td>63</td><td>80</td><td>CAN</td><td>45</td><td>0 year</td><td>$500,000</td></tr>
<tr><td>Alex Burrows</td><td>73</td><td>68</td><td>72</td><td>67</td><td>60</td><td>56</td><td>85</td><td>CAN</td><td>40</td><td>0 year</td><td>$0</td></tr>
<tr><td>Alexandre Burrows</td><td>49</td><td>63</td><td>47</td><td>67</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>40</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Anders Sorensen</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>SWE</td><td>46</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Andrew Brunette</td><td>65</td><td>70</td><td>75</td><td>66</td><td>71</td><td>66</td><td>78</td><td>CAN</td><td>47</td><td>0 year</td><td>$0</td></tr>
<tr><td>Barry Smith</td><td>43</td><td>43</td><td>66</td><td>68</td><td>45</td><td>46</td><td>52</td><td>USA</td><td>60</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Ben Simon</td><td>67</td><td>66</td><td>66</td><td>68</td><td>65</td><td>61</td><td>83</td><td>USA</td><td>42</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Benoit Grouix</td><td>60</td><td>47</td><td>73</td><td>37</td><td>56</td><td>47</td><td>53</td><td>CAN</td><td>53</td><td>0 year</td><td>$600,000</td></tr>
<tr><td>Benoit Groulx</td><td>76</td><td>75</td><td>73</td><td>79</td><td>82</td><td>77</td><td>69</td><td>CAN</td><td>53</td><td>0 year</td><td>$0</td></tr>
<tr><td>Blaine Forsythe</td><td>67</td><td>69</td><td>75</td><td>62</td><td>68</td><td>63</td><td>80</td><td>CAN</td><td>45</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Bob Boughner</td><td>82</td><td>83</td><td>81</td><td>80</td><td>75</td><td>70</td><td>75</td><td>CAN</td><td>50</td><td>0 year</td><td>$2,000,000</td></tr>
<tr><td>Bob Jones</td><td>71</td><td>64</td><td>63</td><td>65</td><td>77</td><td>71</td><td>73</td><td>CAN</td><td>51</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Bob Murray</td><td>81</td><td>74</td><td>55</td><td>67</td><td>64</td><td>60</td><td>67</td><td>CAN</td><td>66</td><td>3 years</td><td>$3,200,000</td></tr>
<tr><td>Bob Woods</td><td>63</td><td>71</td><td>73</td><td>68</td><td>80</td><td>74</td><td>69</td><td>CAN</td><td>53</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Brad Larsen</td><td>65</td><td>71</td><td>61</td><td>72</td><td>65</td><td>60</td><td>82</td><td>CAN</td><td>43</td><td>3 years</td><td>$600,000</td></tr>
<tr><td>Brad Shaw</td><td>64</td><td>70</td><td>61</td><td>72</td><td>84</td><td>78</td><td>63</td><td>CAN</td><td>56</td><td>3 years</td><td>$600,000</td></tr>
<tr><td>Brad Tapper</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>41</td><td>0 year</td><td>$500,000</td></tr>
<tr><td>Brent Thompson</td><td>68</td><td>62</td><td>60</td><td>68</td><td>78</td><td>73</td><td>75</td><td>CAN</td><td>50</td><td>0 year</td><td>$0</td></tr>
<tr><td>Brett Furguson</td><td>54</td><td>52</td><td>35</td><td>37</td><td>47</td><td>35</td><td>43</td><td>CAN</td><td>53</td><td>3 years</td><td>$400,000</td></tr>
<tr><td>Brett McLean</td><td>61</td><td>71</td><td>71</td><td>64</td><td>63</td><td>59</td><td>83</td><td>CAN</td><td>42</td><td>3 years</td><td>$100,000</td></tr>
<tr><td>Brian Wiseman</td><td>66</td><td>71</td><td>72</td><td>67</td><td>74</td><td>69</td><td>76</td><td>CAN</td><td>49</td><td>0 year</td><td>$0</td></tr>
<tr><td>Cail MacLean</td><td>69</td><td>66</td><td>68</td><td>66</td><td>68</td><td>64</td><td>81</td><td>CAN</td><td>44</td><td>3 years</td><td>$100,000</td></tr>
<tr><td>Charlie Huddy</td><td>67</td><td>74</td><td>70</td><td>70</td><td>92</td><td>85</td><td>53</td><td>CAN</td><td>61</td><td>0 year</td><td>$850,000</td></tr>
<tr><td>Chris Dennis</td><td>55</td><td>50</td><td>43</td><td>50</td><td>47</td><td>35</td><td>47</td><td>CAN</td><td>53</td><td>3 years</td><td>$400,000</td></tr>
<tr><td>Chris Hajt</td><td>46</td><td>50</td><td>50</td><td>72</td><td>45</td><td>46</td><td>52</td><td>CAN</td><td>40</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Clark Donatelli</td><td>79</td><td>56</td><td>59</td><td>35</td><td>53</td><td>49</td><td>55</td><td>USA</td><td>55</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Cory Stillman</td><td>69</td><td>68</td><td>63</td><td>68</td><td>71</td><td>66</td><td>78</td><td>CAN</td><td>47</td><td>0 year</td><td>$0</td></tr>
<tr><td>Dan Hinote</td><td>63</td><td>72</td><td>63</td><td>63</td><td>66</td><td>62</td><td>81</td><td>USA</td><td>44</td><td>0 year</td><td>$0</td></tr>
<tr><td>Dan Lambert</td><td>63</td><td>71</td><td>68</td><td>65</td><td>77</td><td>71</td><td>73</td><td>CAN</td><td>51</td><td>0 year</td><td>$0</td></tr>
<tr><td>Dan Muse</td><td>45</td><td>72</td><td>55</td><td>58</td><td>45</td><td>46</td><td>54</td><td>USA</td><td>39</td><td>3 years</td><td>$400,000</td></tr>
<tr><td>Daniel Jacob</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>41</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Daniel Tkaczuk</td><td>31</td><td>36</td><td>57</td><td>51</td><td>47</td><td>35</td><td>43</td><td>CAN</td><td>42</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Darby Hendrickson</td><td>62</td><td>70</td><td>72</td><td>67</td><td>72</td><td>67</td><td>77</td><td>USA</td><td>48</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Darryl Sutter</td><td>81</td><td>88</td><td>79</td><td>84</td><td>93</td><td>87</td><td>51</td><td>CAN</td><td>62</td><td>0 year</td><td>$0</td></tr>
<tr><td>Dave Barr</td><td>47</td><td>53</td><td>73</td><td>48</td><td>45</td><td>46</td><td>52</td><td>CAN</td><td>60</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Dave Hakstol</td><td>62</td><td>71</td><td>75</td><td>72</td><td>78</td><td>73</td><td>71</td><td>CAN</td><td>52</td><td>0 year</td><td>$5,000,000</td></tr>
<tr><td>Dave Lowry</td><td>67</td><td>74</td><td>69</td><td>70</td><td>84</td><td>78</td><td>63</td><td>CAN</td><td>56</td><td>1 years</td><td>$1,000,000</td></tr>
<tr><td>Dave Manson</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>54</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>David Bell</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>44</td><td>3 years</td><td>$100,000</td></tr>
<tr><td>David Cunniff</td><td>43</td><td>51</td><td>55</td><td>42</td><td>47</td><td>35</td><td>46</td><td>USA</td><td>47</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>David Oliver</td><td>63</td><td>67</td><td>70</td><td>58</td><td>74</td><td>69</td><td>76</td><td>CAN</td><td>49</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>David Urquhart</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>37</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Davis Payne</td><td>70</td><td>63</td><td>64</td><td>66</td><td>75</td><td>70</td><td>75</td><td>CAN</td><td>50</td><td>0 year</td><td>$1,500,000</td></tr>
<tr><td>Dean Chynoweth</td><td>64</td><td>76</td><td>71</td><td>68</td><td>78</td><td>73</td><td>71</td><td>CAN</td><td>52</td><td>3 years</td><td>$1,800,000</td></tr>
<tr><td>Derek King</td><td>68</td><td>64</td><td>63</td><td>68</td><td>84</td><td>78</td><td>67</td><td>CAN</td><td>54</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Derek Laxdal</td><td>67</td><td>76</td><td>64</td><td>68</td><td>83</td><td>77</td><td>65</td><td>CAN</td><td>55</td><td>0 year</td><td>$1,000,000</td></tr>
<tr><td>Derek MacKenzie</td><td>64</td><td>69</td><td>74</td><td>65</td><td>59</td><td>55</td><td>86</td><td>CAN</td><td>39</td><td>0 year</td><td>$0</td></tr>
<tr><td>Dom Ducharme</td><td>72</td><td>62</td><td>60</td><td>59</td><td>45</td><td>46</td><td>57</td><td>CAN</td><td>48</td><td>3 years</td><td>$600,000</td></tr>
<tr><td>Domenic Pittis</td><td>42</td><td>36</td><td>34</td><td>53</td><td>47</td><td>35</td><td>41</td><td>CAN</td><td>46</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Dominique Ducharme</td><td>82</td><td>81</td><td>83</td><td>82</td><td>72</td><td>67</td><td>77</td><td>CAN</td><td>48</td><td>0 year</td><td>$0</td></tr>
<tr><td>Don Granato</td><td>71</td><td>72</td><td>71</td><td>81</td><td>80</td><td>74</td><td>69</td><td>USA</td><td>53</td><td>3 years</td><td>$400,000</td></tr>
<tr><td>Don Nachbaur</td><td>63</td><td>52</td><td>43</td><td>61</td><td>45</td><td>46</td><td>52</td><td>CAN</td><td>61</td><td>3 years</td><td>$600,000</td></tr>
<tr><td>Doug Houda</td><td>65</td><td>65</td><td>61</td><td>69</td><td>81</td><td>76</td><td>67</td><td>CAN</td><td>54</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Doug Janik</td><td>65</td><td>55</td><td>30</td><td>65</td><td>47</td><td>35</td><td>50</td><td>USA</td><td>41</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Drew Bannister</td><td>37</td><td>42</td><td>67</td><td>60</td><td>49</td><td>36</td><td>48</td><td>CAN</td><td>47</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Eric Boguniecki</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>USA</td><td>42</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Eric Dubois</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>51</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Gary Agnew</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>61</td><td>3 years</td><td>$100,000</td></tr>
<tr><td>Geordie Kinnear</td><td>77</td><td>65</td><td>35</td><td>77</td><td>53</td><td>38</td><td>57</td><td>CAN</td><td>44</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Gilles Bouchard</td><td>51</td><td>40</td><td>62</td><td>31</td><td>47</td><td>35</td><td>44</td><td>CAN</td><td>50</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Glen Gulutzan</td><td>67</td><td>73</td><td>72</td><td>68</td><td>74</td><td>69</td><td>76</td><td>CAN</td><td>49</td><td>0 year</td><td>$700,000</td></tr>
<tr><td>Gord Dineen</td><td>37</td><td>67</td><td>59</td><td>60</td><td>50</td><td>41</td><td>52</td><td>CAN</td><td>55</td><td>0 year</td><td>$800,000</td></tr>
<tr><td>Gord Murphy</td><td>54</td><td>44</td><td>57</td><td>52</td><td>45</td><td>46</td><td>50</td><td>CAN</td><td>52</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Greg Brown</td><td>64</td><td>68</td><td>71</td><td>59</td><td>80</td><td>74</td><td>69</td><td>USA</td><td>53</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Greg Cronin</td><td>64</td><td>68</td><td>70</td><td>72</td><td>88</td><td>83</td><td>61</td><td>USA</td><td>57</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Greg Moore</td><td>62</td><td>60</td><td>71</td><td>73</td><td>57</td><td>54</td><td>88</td><td>USA</td><td>37</td><td>0 year</td><td>$0</td></tr>
<tr><td>Greg Rallo</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>USA</td><td>40</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Ian Laperriere</td><td>64</td><td>66</td><td>69</td><td>67</td><td>71</td><td>66</td><td>78</td><td>CAN</td><td>47</td><td>3 years</td><td>$400,000</td></tr>
<tr><td>J.D. Forrest</td><td>61</td><td>61</td><td>67</td><td>74</td><td>62</td><td>58</td><td>85</td><td>USA</td><td>40</td><td>3 years</td><td>$100,000</td></tr>
<tr><td>J.J. Daigneault</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>54</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Jack Capuano</td><td>73</td><td>64</td><td>66</td><td>65</td><td>81</td><td>76</td><td>67</td><td>USA</td><td>54</td><td>1 years</td><td>$2,000,000</td></tr>
<tr><td>Jacques Martin</td><td>67</td><td>71</td><td>70</td><td>63</td><td>99</td><td>95</td><td>39</td><td>CAN</td><td>68</td><td>1 years</td><td>$2,650,000</td></tr>
<tr><td>Jamie Kompon</td><td>66</td><td>73</td><td>69</td><td>70</td><td>81</td><td>76</td><td>67</td><td>CAN</td><td>54</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Jamie Pringle</td><td>41</td><td>65</td><td>73</td><td>55</td><td>45</td><td>46</td><td>54</td><td>CAN</td><td>46</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Jaroslav Modry</td><td>63</td><td>30</td><td>37</td><td>39</td><td>47</td><td>35</td><td>42</td><td>CZE</td><td>50</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Jarrod Skalde</td><td>67</td><td>48</td><td>50</td><td>30</td><td>47</td><td>35</td><td>46</td><td>CAN</td><td>50</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Jason King</td><td>60</td><td>34</td><td>45</td><td>49</td><td>47</td><td>35</td><td>45</td><td>CAN</td><td>36</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Jay Pandolfo</td><td>68</td><td>78</td><td>71</td><td>62</td><td>69</td><td>64</td><td>79</td><td>USA</td><td>46</td><td>0 year</td><td>$500,000</td></tr>
<tr><td>Jay Varady</td><td>66</td><td>69</td><td>67</td><td>70</td><td>65</td><td>60</td><td>82</td><td>USA</td><td>43</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Jay Woodcroft</td><td>65</td><td>66</td><td>69</td><td>70</td><td>68</td><td>64</td><td>81</td><td>CAN</td><td>44</td><td>0 year</td><td>$950,000</td></tr>
<tr><td>Jean-Francois Houle</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>46</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Jeff Daniels</td><td>65</td><td>77</td><td>72</td><td>69</td><td>78</td><td>73</td><td>71</td><td>CAN</td><td>52</td><td>3 years</td><td>$1,800,000</td></tr>
<tr><td>Jeff Halpern</td><td>65</td><td>76</td><td>72</td><td>61</td><td>66</td><td>62</td><td>81</td><td>USA</td><td>44</td><td>0 year</td><td>$700,000</td></tr>
<tr><td>Jeremy Colilton</td><td>57</td><td>57</td><td>88</td><td>91</td><td>65</td><td>52</td><td>68</td><td>CAN</td><td>36</td><td>0 year</td><td>$600,000</td></tr>
<tr><td>Jeremy Colliton</td><td>82</td><td>83</td><td>83</td><td>87</td><td>54</td><td>50</td><td>89</td><td>CAN</td><td>36</td><td>0 year</td><td>$0</td></tr>
<tr><td>Jim Hiller</td><td>70</td><td>76</td><td>64</td><td>69</td><td>77</td><td>71</td><td>73</td><td>CAN</td><td>51</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Jim Playfair</td><td>68</td><td>73</td><td>74</td><td>69</td><td>84</td><td>78</td><td>63</td><td>CAN</td><td>56</td><td>0 year</td><td>$0</td></tr>
<tr><td>Jimmy Bonneau</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>36</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Joe Cirella</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>58</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Joe Sacco</td><td>69</td><td>80</td><td>72</td><td>64</td><td>78</td><td>73</td><td>71</td><td>USA</td><td>52</td><td>3 years</td><td>$600,000</td></tr>
<tr><td>Joey Mormina</td><td>57</td><td>57</td><td>49</td><td>45</td><td>47</td><td>35</td><td>48</td><td>CAN</td><td>39</td><td>3 years</td><td>$100,000</td></tr>
<tr><td>John Gruden</td><td>70</td><td>76</td><td>64</td><td>69</td><td>75</td><td>70</td><td>75</td><td>USA</td><td>50</td><td>3 years</td><td>$1,200,000</td></tr>
<tr><td>John Hynes</td><td>80</td><td>86</td><td>82</td><td>80</td><td>69</td><td>64</td><td>79</td><td>USA</td><td>46</td><td>1 years</td><td>$2,000,000</td></tr>
<tr><td>John MacLean</td><td>65</td><td>68</td><td>46</td><td>71</td><td>46</td><td>34</td><td>55</td><td>CAN</td><td>57</td><td>3 years</td><td>$400,000</td></tr>
<tr><td>John Madden</td><td>67</td><td>63</td><td>62</td><td>65</td><td>72</td><td>67</td><td>77</td><td>CAN</td><td>48</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>John Slaney</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>49</td><td>0 year</td><td>$600,000</td></tr>
<tr><td>John Stevens</td><td>69</td><td>75</td><td>65</td><td>66</td><td>81</td><td>76</td><td>67</td><td>CAN</td><td>54</td><td>1 years</td><td>$3,000,000</td></tr>
<tr><td>John Torchetti</td><td>53</td><td>46</td><td>51</td><td>63</td><td>47</td><td>52</td><td>52</td><td>USA</td><td>54</td><td>0 year</td><td>$770,000</td></tr>
<tr><td>John Wroblewski</td><td>62</td><td>60</td><td>72</td><td>73</td><td>60</td><td>57</td><td>86</td><td>USA</td><td>39</td><td>0 year</td><td>$0</td></tr>
<tr><td>Karl Taylor</td><td>75</td><td>56</td><td>56</td><td>67</td><td>49</td><td>41</td><td>57</td><td>CAN</td><td>48</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Keith McCambridge</td><td>67</td><td>67</td><td>58</td><td>53</td><td>59</td><td>43</td><td>58</td><td>CAN</td><td>43</td><td>0 year</td><td>$0</td></tr>
<tr><td>Ken Klee</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>USA</td><td>50</td><td>3 years</td><td>$100,000</td></tr>
<tr><td>Kenny McCudden</td><td>65</td><td>71</td><td>62</td><td>73</td><td>89</td><td>83</td><td>57</td><td>USA</td><td>59</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Kevin Dean</td><td>67</td><td>79</td><td>70</td><td>63</td><td>78</td><td>73</td><td>71</td><td>USA</td><td>52</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Kevin Dineen</td><td>67</td><td>66</td><td>72</td><td>68</td><td>88</td><td>83</td><td>61</td><td>CAN</td><td>57</td><td>1 years</td><td>$1,000,000</td></tr>
<tr><td>Kevin McCarthy</td><td>68</td><td>72</td><td>76</td><td>65</td><td>95</td><td>88</td><td>49</td><td>CAN</td><td>63</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Lane Lambert</td><td>72</td><td>77</td><td>65</td><td>71</td><td>84</td><td>78</td><td>63</td><td>CAN</td><td>56</td><td>0 year</td><td>$800,000</td></tr>
<tr><td>Lindy Ruff</td><td>76</td><td>78</td><td>81</td><td>79</td><td>92</td><td>85</td><td>53</td><td>CAN</td><td>61</td><td>0 year</td><td>$900,000</td></tr>
<tr><td>Luke Richardson</td><td>72</td><td>70</td><td>66</td><td>68</td><td>78</td><td>73</td><td>71</td><td>CAN</td><td>52</td><td>3 years</td><td>$400,000</td></tr>
<tr><td>Manny Viveiros</td><td>77</td><td>72</td><td>71</td><td>78</td><td>85</td><td>80</td><td>65</td><td>CAN</td><td>55</td><td>0 year</td><td>$0</td></tr>
<tr><td>Marco Sturm</td><td>64</td><td>70</td><td>61</td><td>71</td><td>63</td><td>59</td><td>83</td><td>DEU</td><td>42</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Mark Morrison</td><td>67</td><td>68</td><td>62</td><td>64</td><td>87</td><td>81</td><td>59</td><td>CAN</td><td>58</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Mark Recchi</td><td>66</td><td>68</td><td>67</td><td>71</td><td>80</td><td>74</td><td>69</td><td>CAN</td><td>53</td><td>3 years</td><td>$600,000</td></tr>
<tr><td>Martin Gelinas</td><td>64</td><td>71</td><td>66</td><td>68</td><td>75</td><td>70</td><td>75</td><td>CAN</td><td>50</td><td>0 year</td><td>$675,000</td></tr>
<tr><td>Martin Raymond</td><td>55</td><td>41</td><td>56</td><td>56</td><td>45</td><td>46</td><td>50</td><td>CAN</td><td>53</td><td>3 years</td><td>$100,000</td></tr>
<tr><td>Marty Johnston</td><td>53</td><td>39</td><td>60</td><td>62</td><td>47</td><td>35</td><td>49</td><td>CAN</td><td>43</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Marty Wilford</td><td>66</td><td>67</td><td>61</td><td>63</td><td>65</td><td>60</td><td>82</td><td>CAN</td><td>43</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Matt Carkner</td><td>62</td><td>42</td><td>50</td><td>59</td><td>47</td><td>35</td><td>49</td><td>CAN</td><td>40</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Matt MacDonald</td><td>48</td><td>58</td><td>43</td><td>43</td><td>47</td><td>35</td><td>46</td><td>CAN</td><td>38</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Michel Therrien</td><td>66</td><td>68</td><td>71</td><td>69</td><td>86</td><td>80</td><td>61</td><td>CAN</td><td>57</td><td>0 year</td><td>$0</td></tr>
<tr><td>Mike Bales</td><td>64</td><td>65</td><td>64</td><td>74</td><td>74</td><td>69</td><td>76</td><td>CAN</td><td>49</td><td>0 year</td><td>$0</td></tr>
<tr><td>Mike Chiasson</td><td>40</td><td>31</td><td>42</td><td>37</td><td>47</td><td>35</td><td>39</td><td>USA</td><td>30</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Mike Eaves</td><td>73</td><td>67</td><td>68</td><td>63</td><td>99</td><td>93</td><td>47</td><td>USA</td><td>64</td><td>0 year</td><td>$0</td></tr>
<tr><td>Mike Grier</td><td>64</td><td>47</td><td>47</td><td>50</td><td>45</td><td>46</td><td>50</td><td>USA</td><td>46</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Mike Knuble</td><td>31</td><td>57</td><td>50</td><td>51</td><td>47</td><td>35</td><td>45</td><td>CAN</td><td>47</td><td>3 years</td><td>$400,000</td></tr>
<tr><td>Mike Stothers</td><td>74</td><td>35</td><td>43</td><td>46</td><td>55</td><td>49</td><td>50</td><td>CAN</td><td>57</td><td>0 year</td><td>$750,000</td></tr>
<tr><td>Mike Van Ryn</td><td>66</td><td>73</td><td>70</td><td>71</td><td>62</td><td>57</td><td>84</td><td>CAN</td><td>41</td><td>0 year</td><td>$1,340,000</td></tr>
<tr><td>Mike Yeo</td><td>65</td><td>67</td><td>70</td><td>68</td><td>71</td><td>66</td><td>78</td><td>CAN</td><td>47</td><td>0 year</td><td>$1,000,000</td></tr>
<tr><td>Neil Graham</td><td>62</td><td>64</td><td>67</td><td>74</td><td>54</td><td>51</td><td>90</td><td>CAN</td><td>35</td><td>0 year</td><td>$0</td></tr>
<tr><td>Newell Brown</td><td>66</td><td>68</td><td>67</td><td>63</td><td>89</td><td>83</td><td>57</td><td>CAN</td><td>59</td><td>0 year</td><td>$1,500,000</td></tr>
<tr><td>Nolan Baumgartner</td><td>65</td><td>67</td><td>68</td><td>64</td><td>68</td><td>63</td><td>80</td><td>CAN</td><td>45</td><td>0 year</td><td>$1,000,000</td></tr>
<tr><td>Pat Ferschweiler</td><td>53</td><td>46</td><td>51</td><td>63</td><td>45</td><td>46</td><td>51</td><td>USA</td><td>49</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Patrick Wellar</td><td>50</td><td>53</td><td>64</td><td>57</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>38</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Paul Boutilier</td><td>32</td><td>48</td><td>52</td><td>32</td><td>47</td><td>35</td><td>41</td><td>CAN</td><td>57</td><td>3 years</td><td>$100,000</td></tr>
<tr><td>Paul MacLean</td><td>63</td><td>75</td><td>68</td><td>72</td><td>95</td><td>88</td><td>49</td><td>CAN</td><td>63</td><td>0 year</td><td>$0</td></tr>
<tr><td>Paul McFarland</td><td>62</td><td>45</td><td>65</td><td>57</td><td>45</td><td>46</td><td>53</td><td>CAN</td><td>35</td><td>3 years</td><td>$400,000</td></tr>
<tr><td>Ralph Krueger</td><td>77</td><td>80</td><td>78</td><td>86</td><td>92</td><td>85</td><td>53</td><td>CHE</td><td>61</td><td>0 year</td><td>$0</td></tr>
<tr><td>Randy Carlyle</td><td>71</td><td>64</td><td>45</td><td>57</td><td>95</td><td>79</td><td>68</td><td>CAN</td><td>61</td><td>1 years</td><td>$3,500,000</td></tr>
<tr><td>Ray Bennett</td><td>63</td><td>78</td><td>77</td><td>67</td><td>87</td><td>81</td><td>59</td><td>CAN</td><td>58</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Ray Edwards</td><td>62</td><td>69</td><td>66</td><td>68</td><td>75</td><td>70</td><td>75</td><td>CAN</td><td>50</td><td>0 year</td><td>$0</td></tr>
<tr><td>Reid Cashman</td><td>59</td><td>57</td><td>70</td><td>53</td><td>45</td><td>46</td><td>55</td><td>USA</td><td>38</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Rich Preston</td><td>61</td><td>56</td><td>41</td><td>50</td><td>45</td><td>46</td><td>50</td><td>CAN</td><td>69</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Rick Kowalsky</td><td>63</td><td>65</td><td>63</td><td>68</td><td>74</td><td>69</td><td>76</td><td>CAN</td><td>49</td><td>0 year</td><td>$0</td></tr>
<tr><td>Rob Cookson</td><td>55</td><td>41</td><td>56</td><td>56</td><td>45</td><td>46</td><td>50</td><td>CAN</td><td>60</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Rob Davidson</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>44</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Rob Nardella</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>ITA</td><td>53</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Rob Zettler</td><td>68</td><td>77</td><td>73</td><td>60</td><td>80</td><td>74</td><td>69</td><td>CAN</td><td>53</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Rod Brind'Amour</td><td>86</td><td>92</td><td>87</td><td>84</td><td>75</td><td>70</td><td>75</td><td>CAN</td><td>50</td><td>0 year</td><td>$0</td></tr>
<tr><td>Roy Sommer</td><td>68</td><td>64</td><td>65</td><td>64</td><td>99</td><td>93</td><td>47</td><td>USA</td><td>64</td><td>0 year</td><td>$750,000</td></tr>
<tr><td>Ryan Craig</td><td>68</td><td>74</td><td>73</td><td>69</td><td>59</td><td>55</td><td>86</td><td>CAN</td><td>39</td><td>3 years</td><td>$800,000</td></tr>
<tr><td>Ryan Huska</td><td>64</td><td>70</td><td>65</td><td>67</td><td>68</td><td>63</td><td>80</td><td>CAN</td><td>45</td><td>1 years</td><td>$1,100,000</td></tr>
<tr><td>Ryan McGill</td><td>70</td><td>73</td><td>74</td><td>67</td><td>78</td><td>73</td><td>71</td><td>CAN</td><td>52</td><td>3 years</td><td>$800,000</td></tr>
<tr><td>Ryan Murphy</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>USA</td><td>36</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Ryan Parent</td><td>45</td><td>62</td><td>62</td><td>52</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>34</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Ryan Tobler</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>45</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Ryan Warsofsky</td><td>73</td><td>70</td><td>74</td><td>62</td><td>51</td><td>48</td><td>92</td><td>USA</td><td>33</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Scott Allen</td><td>65</td><td>68</td><td>46</td><td>71</td><td>45</td><td>46</td><td>57</td><td>USA</td><td>51</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Scott Ford</td><td>64</td><td>48</td><td>48</td><td>57</td><td>47</td><td>35</td><td>50</td><td>CAN</td><td>41</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Scott Gomez</td><td>66</td><td>74</td><td>53</td><td>64</td><td>45</td><td>46</td><td>58</td><td>CAN</td><td>42</td><td>3 years</td><td>$400,000</td></tr>
<tr><td>Scott Gordon</td><td>71</td><td>70</td><td>67</td><td>74</td><td>90</td><td>84</td><td>59</td><td>USA</td><td>58</td><td>0 year</td><td>$900,000</td></tr>
<tr><td>Scott Stevens</td><td>30</td><td>30</td><td>30</td><td>30</td><td>30</td><td>30</td><td>30</td><td>CAN</td><td>53</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Sergei Brylin</td><td>37</td><td>67</td><td>59</td><td>60</td><td>47</td><td>35</td><td>51</td><td>RUS</td><td>44</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Sergei Gonchar</td><td>74</td><td>59</td><td>68</td><td>59</td><td>45</td><td>46</td><td>59</td><td>RUS</td><td>46</td><td>3 years</td><td>$600,000</td></tr>
<tr><td>Seth Appert</td><td>75</td><td>60</td><td>70</td><td>60</td><td>71</td><td>67</td><td>79</td><td>USA</td><td>46</td><td>0 year</td><td>$0</td></tr>
<tr><td>Steve McCarthy</td><td>37</td><td>54</td><td>40</td><td>40</td><td>47</td><td>35</td><td>42</td><td>CAN</td><td>40</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Steve Ott</td><td>65</td><td>72</td><td>69</td><td>69</td><td>57</td><td>53</td><td>87</td><td>CAN</td><td>38</td><td>0 year</td><td>$700,000</td></tr>
<tr><td>Steve Potvin</td><td>64</td><td>60</td><td>66</td><td>71</td><td>71</td><td>67</td><td>79</td><td>CAN</td><td>46</td><td>3 years</td><td>$100,000</td></tr>
<tr><td>Steve Spott</td><td>67</td><td>75</td><td>75</td><td>72</td><td>78</td><td>73</td><td>71</td><td>CAN</td><td>52</td><td>0 year</td><td>$300,000</td></tr>
<tr><td>Stu Barnes</td><td>57</td><td>73</td><td>44</td><td>65</td><td>45</td><td>46</td><td>55</td><td>CAN</td><td>51</td><td>3 years</td><td>$400,000</td></tr>
<tr><td>Terry Murray</td><td>48</td><td>65</td><td>67</td><td>35</td><td>74</td><td>57</td><td>58</td><td>CAN</td><td>67</td><td>0 year</td><td>$1,800,000</td></tr>
<tr><td>Toby Petersen</td><td>45</td><td>32</td><td>39</td><td>47</td><td>47</td><td>35</td><td>41</td><td>USA</td><td>50</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Todd McLellan</td><td>80</td><td>86</td><td>77</td><td>87</td><td>80</td><td>74</td><td>69</td><td>CAN</td><td>53</td><td>1 years</td><td>$3,750,000</td></tr>
<tr><td>Todd Nelson</td><td>65</td><td>74</td><td>66</td><td>70</td><td>77</td><td>71</td><td>73</td><td>CAN</td><td>51</td><td>0 year</td><td>$600,000</td></tr>
<tr><td>Todd Woodcroft</td><td>58</td><td>59</td><td>68</td><td>46</td><td>45</td><td>46</td><td>54</td><td>CAN</td><td>48</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Tom Ward</td><td>46</td><td>50</td><td>50</td><td>72</td><td>45</td><td>46</td><td>52</td><td>USA</td><td>57</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Tomas Mitell</td><td>65</td><td>66</td><td>67</td><td>70</td><td>60</td><td>56</td><td>85</td><td>SWE</td><td>40</td><td>0 year</td><td>$0</td></tr>
<tr><td>Trent Whitfield</td><td>51</td><td>64</td><td>65</td><td>44</td><td>47</td><td>35</td><td>51</td><td>CAN</td><td>42</td><td>1 years</td><td>$500,000</td></tr>
<tr><td>Trent Yawney</td><td>67</td><td>73</td><td>60</td><td>74</td><td>83</td><td>77</td><td>65</td><td>CAN</td><td>55</td><td>1 years</td><td>$450,000</td></tr>
<tr><td>Ulf Samuelsson</td><td>69</td><td>75</td><td>76</td><td>62</td><td>86</td><td>80</td><td>61</td><td>SWE</td><td>57</td><td>3 years</td><td>$400,000</td></tr>
<tr><td>Wade Flaherty</td><td>65</td><td>72</td><td>68</td><td>68</td><td>80</td><td>74</td><td>69</td><td>CAN</td><td>53</td><td>3 years</td><td>$500,000</td></tr>
<tr><td>Willie Desjardins</td><td>84</td><td>69</td><td>57</td><td>81</td><td>73</td><td>53</td><td>70</td><td>CAN</td><td>60</td><td>0 year</td><td>$2,500,000</td></tr>
</table>
<?php include "Footer.php";?>
