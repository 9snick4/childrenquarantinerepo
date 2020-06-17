CREATE TABLE AssetType (
    AssetTypeID SERIAL PRIMARY KEY NOT NULL,
    Name VARCHAR(50) NOT NULL,
    Description VARCHAR(1000) NOT NULL
);

CREATE TABLE Asset (
    AssetID SERIAL PRIMARY KEY NOT NULL,
    AssetName VARCHAR(20) NOT NULL,
    AssetType INT REFERENCES AssetType(AssetTypeID) NOT NULL,
    CreatedOn TIMESTAMP NOT NULL,
    ModifiedOn TIMESTAMP NOT NULL
);
