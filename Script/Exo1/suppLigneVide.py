# Traitement des valeurs manquantes
import pandas as pd

# Charger le fichier CSV dans un dataframe
df = pd.read_csv('../../File/exoplanets.csv')

# Supprimer les lignes avec des valeurs manquantes
df = df.dropna()


# Suppression des colonnes inutiles
# data = data.drop(["col1", "col2", ...], axis=1)

# Traitement des valeurs manquantes
imputer = SimpleImputer(missing_values=np.nan, strategy='mean')
data = imputer.fit_transform(data)

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
