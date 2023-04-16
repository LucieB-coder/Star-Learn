# Traitement des valeurs manquantes
import pandas as pd

# Charger le fichier CSV dans un dataframe
df = pd.read_csv('starlearn-main/File/exoplanets.csv')


#  On traite les valeurs manquantes et les colonnes inutiles
df.dropna( how='all', axis=1, inplace=True)  # On supprime les colonnes contenant que des valeurs manquantes
df.drop(columns=["kepid","kepoi_name","kepler_name", "koi_pdisposition","koi_tce_delivname"], inplace=True) # On supprime les colonnes inutiles
df.dropna(inplace=True) # On supprime les lignes contenant des valeurs manquantes



### Traitement des données 
# On transforme les valeurs de la colonne koi_disposition en entier
df["koi_disposition"] = df["koi_disposition"].map(
    {"CONFIRMED": 1, "FALSE POSITIVE": 0, "CANDIDATE": 2}
)

for i in df.columns :
    print(i)
    # print(df[i])
    if df[i].dtype == "float64" :
        print("Min : ", df[i].min())
        print("Max : ", df[i].max())
        print("Moyenne : ", df[i].mean())
        print("1er quartile : ", df[i].quantile(0.25))
        print("Médiane : ", df[i].median())
        print("3ème quartile : ", df[i].quantile(0.75))
    else :
        print("### Pas un float ###")
    print()




# Echantillonnage dans le cas de classes déséquilibrées
data_majority = data[data["class"] == "majority"]
data_minority = data[data["class"] == "minority"]
data_minority_upsampled = resample(data_minority, replace=True, n_samples=len(data_majority), random_state=123)
data = pd.concat([data_majority, data_minority_upsampled])

# Normalisation des données (MinMax ou standardisation)
scaler = MinMaxScaler() # ou scaler = StandardScaler()
data_scaled = scaler.fit_transform(data)

# Numérisation des colonnes
le = LabelEncoder()
data["column"] = le.fit_transform(data["column"])

# Traduction des données
def translate_language(row):
    try:
        lang = detect(row["text"])
        if lang != "en":
            row["text"] = translate_function(row["text"], lang)
            return row
    except:
            return row

data = data.apply(translate_language, axis=1)



# Enregistrer le nouveau dataframe dans un fichier CSV
#df.to_csv('nouveau_nom_du_fichier.csv', index=False)
